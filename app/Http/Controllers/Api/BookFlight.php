<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Booking;
use App\Payment;
use App\Customer;
use App\Traveler;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\BookingConfirmation;
use Laranext\Exception\Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Facades\App\Api\Amadeus\Amadeus;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Stripe\Customer as StripeCustomer;

class BookFlight extends Controller
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Request
     */
    protected $stripeCustomer;

    /**
     * @var Request
     */
    protected $charge;

    /**
     * @var Request
     */
    protected $user;

    /**
     * @var Request
     */
    protected $customer;

    /**
     * @var Request
     */
    protected $book;

    /**
     * @var Request
     */
    protected $booking;

    /**
     * @var Request
     */
    protected $total;

    /**
     * @var Request
     */
    protected $amount;

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request->all());
        // throw new \Exception("Error Processing Request", 1);

        // return 'thanks';

        $this->request = $request;

        $this->validateRequest();

        DB::transaction(function () {
            $this->setAmount();
            $this->charge();
            $this->createUser();
            $this->createCustomer();

            $this->book();
            $this->createBooking();
            $this->createPayment();
            $this->createTravelers();
        });

        Mail::to($this->request->travelers[0]['email'])
            ->send(new BookingConfirmation(
                empty($this->book['data']) ? 123 : $this->book['data']['id'],
                $this->request->travelers[0]['firstName'] . ' ' . $this->request->travelers[0]['lastName'],
                $this->request->summary,
                $this->book,
                $this->payment
            ));

        return 'thanks';
    }

    /**
     * {@inheritdoc}
     */
    protected function setAmount()
    {
        $flight = Cache::get($this->request->session . ':current_confirmed_flight_price');

        $total = $flight['data']['flightOffers'][0]['price']['grandTotal'];

        $this->total = $total;
        $this->amount = $total * 100;
    }

    /**
     * {@inheritdoc}
     */
    protected function charge()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        // Temp for Testing purpose only.
        if (config('app.url') == 'http://airtrib.test') {
            $this->stripeCustomer = Cache::rememberForever('test_stripe_customer', function () {
                return StripeCustomer::create([
                    'source' => $this->request->stripe['id'],
                    'email' => $this->request->travelers[0]['email'],
                ]);
            });

            $this->charge = Cache::rememberForever('test_stripe_charge', function () {
                return Charge::create([
                    'amount' => $this->amount,
                    'currency' => 'usd',
                    'customer' => $this->stripeCustomer->id,
                ]);
            });

            return;
        }

        $this->stripeCustomer = StripeCustomer::create([
            'source' => $this->request->stripe['id'],
            'email' => $this->request->travelers[0]['email'],
        ]);

        $this->charge = Charge::create([
            'amount' => $this->amount,
            'currency' => 'usd',
            'customer' => $this->stripeCustomer->id,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function createUser()
    {
        // Retrieve flight by name, or create it with the name, delayed, and arrival_time attributes...
        $this->user = User::firstOrCreate(
            [
                'email' => $this->request->travelers[0]['email']
            ],
            [
                'name' => $this->request->travelers[0]['firstName'] . ' ' . $this->request->travelers[0]['lastName'],
                'password' => bcrypt(Str::random(8)),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function createCustomer()
    {
        $this->customer = Customer::firstOrCreate(
            [
                'user_id' => $this->user->id,
            ],
            [
                'stripe_card' => $this->request->stripe,
                'stripe_customer' => $this->stripeCustomer,
                'name' => $this->request->travelers[0]['firstName'] . ' ' . $this->request->travelers[0]['lastName'],
                'first_name' => $this->request->travelers[0]['firstName'],
                'last_name' => $this->request->travelers[0]['lastName'],
                'gender' => $this->request->travelers[0]['gender'],
                'email' => $this->request->travelers[0]['email'],
                'birth_date' => $this->request->travelers[0]['birthDate'],
                'country_code' => $this->request->travelers[0]['countryCode'],
                'phone' => $this->request->travelers[0]['phone'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function createPayment()
    {
        $this->payment = Payment::create([
            'amount' => $this->total,
            'currency' => 'USD',
            'customer_id' => $this->customer->id,
            'booking_id' => $this->booking->id,
            'stripe' => serialize($this->charge),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function createBooking()
    {
        $this->booking = Booking::create([
            'customer_id' => $this->customer->id,
            'amadeus_id' => empty($this->book['data']) ? 123 : $this->book['data']['id'],
            'summary' => $this->request->summary,
            'response' => serialize($this->book),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function createTravelers()
    {
        foreach ($this->request->travelers as $traveler) {
            Traveler::create([
                'booking_id' => $this->booking->id,
                'gender' => $traveler['gender'],
                'name' => $traveler['firstName'] .' '. $traveler['lastName'],
                'first_name' => $traveler['firstName'],
                'last_name' => $traveler['lastName'],
                'email' => $traveler['email'],
                'birth_date' => $traveler['birthDate'],
                'passport' => $traveler['passport'],
                'passport_expire' => $traveler['passportExpire'],
                'country_code' => $traveler['countryCode'],
                'phone' => $traveler['phone'],
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function book()
    {
        $body = [
            'data' => [
                'type' => 'flight-order',
                'flightOffers' => [],
                'travelers' => []
            ]
        ];

        $flight = Cache::get($this->request->session . ':current_confirmed_flight_price');

        for ($i = 1; $i <= count($flight['data']['flightOffers'][0]['travelerPricings']); $i++) {
            // if ($i == 3) {
            //     $dateOfBirth = '2008-02-05';
            // }
            // else {
            //     $dateOfBirth = '1980-01-16';
            // }

            $body['data']['travelers'][] = [
                "id" => $i,
                "dateOfBirth" => $this->request->travelers[$i - 1]['birthDate'],
                "name" => [
                    "firstName" => $this->request->travelers[$i - 1]['firstName'],
                    "lastName" => $this->request->travelers[$i - 1]['lastName'],
                ],
                "gender" => strtoupper ($this->request->travelers[$i - 1]['gender']),
                "contact" => [
                    "emailAddress" => $this->request->travelers[$i - 1]['email'],
                    "phones" => [
                        [
                            "deviceType" => "MOBILE",
                            "countryCallingCode" => $this->request->travelers[$i - 1]['countryCode'],
                            "number" => $this->request->travelers[$i - 1]['phone'],
                        ]
                    ]
                ],
            ];
        }

        $body['data']['flightOffers'][] = $flight['data']['flightOffers'][0];

        // Temp for Testing purpose only.
        // if (config('app.url') == 'http://airtrib.test') {
        //     $this->book = Cache::rememberForever('test_book_flight', function () use ($body) {
        //         return Amadeus::bookFlight($body);
        //     });

        //     return;
        // }

        $this->book = Amadeus::bookFlight($body);

        if ($this->book['status_code'] != 201 && $this->book['status_code'] != 200) {
            // Exception::create([
            //     'message' => serialize($this->book),
            //     'context' => 'serialize($this->context())',
            //     'code' => '$exception->getCode()',
            //     'file' => '$exception->getFile()',
            //     'line' => '1',
            //     'trace' => '$exception->getTraceAsString()',
            // ]);
            // throw new \Exception(json_encode($this->book), 1);
            throw new \Exception(serialize($this->book), 1);
            // throw new \Exception("We couldn't book this flight!", 1);
        }
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validateRequest()
    {
        $this->request->validate([
            'stripe.id' => 'required',
            'travelers.0.email' => 'required',
            'flight.data.type' => 'required',
        ]);
    }
}

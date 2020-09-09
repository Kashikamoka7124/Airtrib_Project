<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Country;
use App\Customer;
use App\Organization;
use App\CorporateType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $organizations = Organization::limit(8)->get();
        $countries = Country::get(['id as key', 'name as value']);
        $corporateTypes = CorporateType::get(['id as key', 'name as value']);

        $isCorporateForm = request()->has('corporate');

        return view('auth.register', get_defined_vars());
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd(request()->all());

        return Validator::make(
            $data,
            [
                'gender' => ['required', 'string', 'max:255'],
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'country' => ['required', 'integer'],
                'country_code' => ['required', 'max:3', 'regex:/^[0-9]{1,3}/i'],
                'phone' => ['required', 'numeric', 'digits_between:5,15'],
                'accept_terms' => ['required'],
                'organizations' => ['max:3'],
                'organizations.*' => ['integer'],
                'corporate_name' => ['sometimes', 'required', 'string'],
                'corporate_type' => ['required_with:corporate_name', 'integer'],
            ],
            [
                'organizations.max' => 'The organizations may not be greater than 3.',
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User;

        DB::transaction(function () use ($data, $user) {
            $user->fill([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->save();

            $customer = Customer::create([
                'user_id' => $user->id,
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'gender' => $data['gender'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'country_id' => $data['country'],
                'country_code' => $data['country_code'],
                'phone' => $data['phone'],
                'individual' => isset($data['corporate_name']) ? false : true,
                'corporate_name' => $data['corporate_name'] ?? null,
                'corporate_type' => $data['corporate_type'] ?? null,
            ]);

            if (isset($data['organizations'])) {
                $customer->organizations()->attach($data['organizations']);
            }
        });

        return $user;
    }
}

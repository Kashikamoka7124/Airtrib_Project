<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\corporate as c;
use App\donation_details;
use App\payments as p;
use App\change_flight as cf;
use Mail;
class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $countries=DB::table('countries')->select('*')->get();
      $organizations=DB::table('organizations')->select('*')->get();
      // dd($c);
      // dd('flights_view');
        // $flights = \Illuminate\Support\Facades\Cache::rememberForever('test_flight_results', function () {
        //     return Amadeus::searchFlights(
        //         new FlightSearchBody($this->request)
        //     );
        // });

        // $cFlights = collect($flights['data']);

        // $r = $cFlights->where('id', 2)->first();
        // dd($r['type']);
        // dd($r->all());

        // return $flights['data'][1];

        return view('flights',compact('countries','organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      // dd($request);
      Validator::make($request->all(), [
    'o_corporation_name' => 'required|unique:corporate|max:255',
    'o_organization' => 'required',
    'o_c_email' => 'required',
    'o_conatct_name' => 'required',
    'o_email' => 'required',
     ])->validate();

      $o=new c();
      $o->o_corporation_name=$request->o_corporation_name;
      $o->o_organization=$request->o_organization;
      $o->o_email=$request->o_email;
      $o->o_c_email=$request->o_c_email;
      $o->o_gender=$request->o_gender;
      $o->o_conatct_name=$request->o_conatct_name;
      $o->o_num_tra_people=$request->o_num_tra_people;
      $o->o_fcountry=$request->o_fcountry;
      $o->o_tcountry=$request->o_tcountry;
      $o->o_ddate=$request->o_ddate;
      $o->o_rdate=$request->o_rdate;
      $o->save();
      $countries=DB::table('countries')->select('*')->get();
      $organizations=DB::table('organizations')->select('*')->get();
      return view('flights',compact('countries','organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $currency=DB::table('currencies')->select('*')->get();
      // dd($donation);
        return view('donation',compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store_donate(Request $request)
    {
      // dd($request);
    //   Validator::make($request->all(), [
    // 'amount' => 'required|unique:donation_details|max:255',
    // 'fname' => 'required',
    // 'lname' => 'required',
    // 'email' => 'required',
    //  ])->validate();
      $d=new donation_details();
      $d->customer_id="1";
      $d->amount=$request->amount;
      $d->currency=$request->currency;
      $d->fname=$request->fname;
      $d->lname=$request->lname;
      $d->email=$request->email;
      $d->c_email=$request->c_email;
      $d->type_card=$request->type_card;
      $d->name_card=$request->name_card;
      $d->card_num=$request->card_num;
      $d->expiry=$request->expiry;
      $d->cvv=$request->cvv;
      $d->save();
      // $p=new p();
      // $p->customer_id="1";
      // $p->booking_id="2";
      // $p->amount=$request->amount;
      // $p->currency=$request->currency;
      // $p->stripe="";
      $currency=DB::table('currencies')->select('*')->get();
      return view('donation',compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change(Request $request)
    {
        return view('flight_change');
    }
//     public function flights(Request $request)
//     {
//       // dd($request);
//
//       $mail_data= DB::table('user_email_templates')->where('slug', 'Draft')->first();
//       // dd($mail_data);
//     			$email = array();
//     			$email[]= $request->email;
//           // dd($email);
//     			//echo "<pre>"; print_r($email); die;
//
//     			$NAME= "ali nasir";
//           // dd($NAME);
//     			$message 		= str_replace(array('NAME'), array($NAME), $mail_data->email_html);
//     			$subject		= str_replace(array('{NAME}'), array($NAME), $mail_data->subject);
//           // print_r($message);
//           // print_r($subject);
//           // exit;
//     			try{
//     				Mail::send('email', array('data'=>$message), function($message) use ($email, $subject){
//     					$message->from('ali.nasir2444@gmail.com');
//     					$message->to('shahzadarshad842@gmail.com','umair')->subject($subject);
//     				});
//     				// return "mail send";
//     			}catch(\Exception $e){
//     								// Get error here
//     							}
//
//                   return view('flight_change');
//
// }

public function sendChangeFlight(Request $request)
    {
      // dd($request);
       $changeFlight= new cf();
       $changeFlight->flight_num=$request->flight_num;
       $changeFlight->flight_name=$request->flight_name;
       $changeFlight->email=$request->email;
       $changeFlight->country_code=$request->country_code;
       $changeFlight->contact=$request->contact;
       $changeFlight->message=$request->message;
       $changeFlight->save();
       $NUMBER=$request->flight_num;
       // dd($NUMBER);
       $mail_data= DB::table('user_email_templates')->where('slug', 'flight')->first();
       $message 		= str_replace(array('NUMBER'), array($NUMBER), $mail_data->email_html);
       $subject		= str_replace(array('{NUMBER}'), array($NUMBER), $mail_data->subject);
       // dd($subject);
       $user = DB::table('users')->select('*')->where('id','=',1)->first();
        // dd($user);
        Mail::send('email', array('data'=>$message), function ($message) use ($user, $subject) {
            $message->from('admin@invictus.com', 'Your Application');

            $message->to($user->email, $user->name)->subject($subject);
        });
        return view('flight_change');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

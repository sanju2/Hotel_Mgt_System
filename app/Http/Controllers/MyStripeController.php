<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect,Response;
use Stripe\Stripe;
use Session;
class MyStripeController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment');
    }
      
     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $stripe = Stripe::charges()->create([
            'source' => $request->get('tokenId'),
            'currency' => 'USD',
            'amount' => $request->get('amount') * 1500
        ]);
  
        return $stripe;
    }
    public function pay(Request $request) {
        \Stripe\Stripe::setApiKey ( 'sk_test_5wSxAThLkxiWMJYw8v7UoMVJ00LCczYxcV' );
        try {
            \Stripe\Charge::create ( array (
                    "amount" => 300 * 100,
                    "currency" => "usd",
                    "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                    "description" => "Test payment." 
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return Redirect::back ();
        } catch ( \Exception $e ) {
            Session::flash ( 'fail-message', "Error! Please Try again." );
            return Redirect::back ();
        }
  
    }}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use Stripe\Stripe;
use Stripe\Charge;

class StripePaymentController extends Controller
{

    public function pay()
    {
        
        Stripe::setApiKey('sk_test_51JCHpFK7cMmABl7p7uJqOPqzOiNzhcnnJEByRlC5B8VtjsRUziDSMGBFKSwuG53rdfYBP9RSJhlyeLkvjItN4zfq00EvsXnq1a');
        $token = request()->stripetoken;

        $charge = Charge::create ([

            "amount" => 100 * 100,

            "currency" => "usd",

            "source" => request()->stripeToken,

            "description" => "Test payment from itsolutionstuff.com." 

    ]);
Session()->flash('success','Purchase successfull, Wait for our email');

Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessfull);
  return redirect()->route('index');

    }
}

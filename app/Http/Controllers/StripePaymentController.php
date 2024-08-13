<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Customer;
use Stripe\PaymentMethod;

class StripePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/pages/homePage');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
           'token' => 'required',
        ]);
    
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        // Create a customer
        $customer = Customer::create();
    
        $paymentMethod = $this->createPaymentMethod($request->token);
        $paymentMethod->attach(['customer' => $customer->id]);
    
        $paymentIntent = PaymentIntent::create([
            'amount' => 1000, // Amount in cents
            'currency' => 'usd',
            'customer' => $customer->id,
            'payment_method' => $paymentMethod->id,
            'confirmation_method' => 'manual',
            'confirm' => true,
        ]);
    
        // Retrieve the client secret
        $clientSecret = $paymentIntent->client_secret;
    
        return response()->json(['client_secret' => $clientSecret]);
    }
    
    private function createPaymentMethod($token)
    {
        return PaymentMethod::create([
            'type' => 'card',
            'card' => [
                'token' => $token,
            ],
        ]);
    }
}

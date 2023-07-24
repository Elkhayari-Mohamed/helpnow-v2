<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\User;
use App\Models\StripeInfo;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\Doctor;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

class WalletsController extends Controller
{

    public function billing(Patient $Patient)
    {
        if (auth()->check()) {

            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer_email = auth()->user()->email;
            $customers = \Stripe\Customer::all(["email" => $customer_email]);
            $charges = null;

            $card = StripeInfo::where('user_id', auth()->id())->latest()->first();
            //dd($card);
            if (count($customers->data) > 0) {
                $customer_id = $customers->data[0]->id;

                $charges = \Stripe\Charge::all(["customer" => $customer_id]);
            }

            if (auth()->user()->type_account == 'patient') {
                $user = auth()->user()->patient;
                //dd($charges);
                return view('patients.billing', ['user' => $user, 'charges' => $charges, 'card' => $card]);
            } else {
                $user = auth()->user()->doctor;
                return view('patients.billing', ['user' => $user, 'charges' => $charges, 'card' => $card]);
            }
        }
        return redirect()->route('login');
    }

    function CardActions(Request $request)
    {
        StripeInfo::where('user_id', auth()->id())->delete();
        return redirect()->back();
    }

    /*  public function charge(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Check if the user already has a Stripe customer ID
            $customerId = null;
            if (auth()->user()->type_account == 'patient') {
                $user = auth()->user()->patient;

                if ($user->stripe_id) {
                    $customerId =  $user->stripe_id;
                } else {
                    // Create a new Stripe customer
                    $customer = \Stripe\Customer::create([
                        'source' => $request->stripeToken,
                        'email' => auth()->user()->email,
                    ]);

                    $card_brand = $customer->sources->data[0]->brand;
                    $card_last_four = $customer->sources->data[0]->last4;

                    // Save the Stripe customer ID to the user
                    $user->stripe_id = $customer->id;
                    $user->card_brand = $card_brand;
                    $user->card_last_four = $card_last_four;
                    $user->save();


                    $customerId = $customer->id;
                }
            } else {

                $user = auth()->user()->doctor;
                if ($user->stripe_id) {
                    $customerId = $user->stripe_id;
                } else {
                    // Create a new Stripe customer
                    $customer = \Stripe\Customer::create([
                        'source' => $request->stripeToken,
                        'email' => auth()->user()->email,
                    ]);

                    $card_brand = $customer->sources->data[0]->brand;
                    $card_last_four = $customer->sources->data[0]->last4;

                    // Save the Stripe customer ID to the user
                    $user->stripe_id = $customer->id;
                    $user->card_brand = $card_brand;
                    $user->card_last_four = $card_last_four;
                    $user->save();


                    $customerId = $customer->id;
                }
            }

            $charge = Charge::create([
                'amount' => 1000, // this is in cents: $10.00
                'currency' => 'usd',
                'customer' => $customerId,
                'description' => 'Test payment',
            ]);

            return back()->with('success_message', 'Payment was successful!');
        } catch (\Exception $ex) {
            // Here you can catch exceptions thrown by Stripe and do something about it, like
            // return an error message to the user and/or log the error.
            return back()->withErrors(['error' => $ex->getMessage()]);
        }
    }*/



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function checkout()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $payment_intent = \Stripe\PaymentIntent::retrieve(session('payment_intent'));
        if ($payment_intent) {
            // clear the session
            $last4 = session('last4');
            $card_brand = session('card_brand');
            $transaction = [
                'id' => $payment_intent->id,
                'amount' => $payment_intent->amount / 100, // Stripe amounts are in cents
                'date' => date('F j, Y', $payment_intent->created),
                'payment_method' => $card_brand . ' ****' . $last4,
            ];
            session()->forget('last4');
            session()->forget('card_brand');

            return view('patients.checkout', compact('transaction'));
        } else
            return redirect('/');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $wallet = Wallet::where('patient_id', auth()->id())->first();

        $customer_email = auth()->user()->email;

        $customers = \Stripe\Customer::all(["email" => $customer_email]);

        $customer_id = null;
        if (count($customers->data) > 0) {
            $customer_id = $customers->data[0]->id;
        } else {
            $customer = \Stripe\Customer::create(['email' => $customer_email]);
            $customer_id = $customer->id;
        }

        session(['customer_id' => $customer_id]);
        $amount = $request->get('amount') * 100; // convert the amount to cents

        try {
            // Continue with creating the PaymentIntent
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amount, // get the amount from the request
                'currency' => 'MAD',
                'customer' => $customer_id,
            ]);

            $wallet->balance = $wallet->balance + ($amount / 100);
            $wallet->save();


            $output = [
                'clientSecret' => $paymentIntent->client_secret,
                'paymentIntentID' => $paymentIntent->id,
                'paymentIntentDate' => $paymentIntent->created,
                'paymentIntentStatus' => $paymentIntent->status,
            ];


            return response()->json($output);
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function saveCardDetails(Request $request)
    {
        $user_id = auth()->user()->id;
        $stripe_id = session('customer_id');
        session(['payment_intent' => $request->input('payment_intent')]);
        session(['last4' => $request->input('card_last_four')]);
        session(['card_brand' => $request->input('card_brand')]);
        $date_exp = $request->input('card_expiration_month')  . '/' . $request->input('card_expiration_year');
        StripeInfo::create([
            'user_id' =>  $user_id,
            'stripe_id' => $stripe_id,
            'card_last_four' => $request->input('card_last_four'),
            'card_brand' => $request->input('card_brand'),
            'date_exp' => $date_exp,
        ]);
        session()->forget('customer_id');

        return response()->json(['message' => 'Card details saved successfully']);
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
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet, $patient_id)
    {
        $user_id = Auth::user()->id;
        $id = Patient::select('id')->where('user_id', $user_id)->first();

        $user_id = Patient::select('user_id')->where('id', $patient_id)->first();
        if ($user_id == Null) {


            //dd($id);
            $wallet = Wallet::select('balance')->where('patient_id', $user_id)->first();
            // dd($wallet);
            $consultations = Consultation::where('patient_id', $id->id)->get();
            // dd($patient->consultation);
            return view('balance', [
                'consultations' => $consultations,
                'balance' => $wallet->balance,
                'patient_id' => $id->id

            ]);
        }

        // dd($user_id);
        $wallet = Wallet::select('balance')->where('patient_id', $user_id->user_id)->first();
        // dd($wallet);
        $consultations = Consultation::where('patient_id', $patient_id)->get();
        // dd($patient->consultation);
        return view('balance', [
            'consultations' => $consultations,
            'balance' => $wallet->balance,
            'patient_id' => $id->id

        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}

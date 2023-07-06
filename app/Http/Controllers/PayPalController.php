<?php

namespace App\Http\Controllers;

use App\Models\BookingDate;
use App\Models\Profile;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createTransaction()
    {
        return view('welcome');
    }

    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        // $cart = session()->get('cart');
        // DD($cart);
        $data = Profile::where('id',$request->profile_id)->first();
        //dd($data);
        if($request->booking_type == "Half Day")
        {
            if($request->recurring == "yes")
            {
                $price =  $data->half_price*4;
            }
            else{
                $price =  $data->half_price;
            }

        }
        else{
             if($request->recurring == "yes")
            {
                 $price =  $data->full_price*4;
            }
            else{
                 $price =  $data->full_price;
            }

        }
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $price,
                    ]
                ]
                    ],
        ]);


        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('home')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('home')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $cart = session()->get('cart');

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);



        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->status = $response['status'];
        $order->save();


        $order_detail = new OrderDetail();
            $order_detail->profile_id = $cart['profile_id'];
            $order_detail->order_id = $order->id;
            $order_detail->booking_id = $cart['booking_id'];
            $order_detail->booking_type = $cart['booking_type'];
            $order_detail->booking_tenure = $cart['booking_tenure'];
            $order_detail->booking_rate = $cart['booking_rate'];
            $order_detail->service_charges = $cart['service_charges'];
            $order_detail->date = $cart['date'];
            $order_detail->total_amount = $cart['total_amount'];
            $order_detail->agreement = $cart['agreement'];
            $order_detail->save();
        if($cart['booking_tenure']=="yes" && isset($cart['date1']))
            {
                $booking = new BookingDate();
                $booking->order_id  =$order->id;
                $booking->profile_id =$cart['profile_id'];
                $booking->booking_date =$cart['date'];
                $booking->save();

                $booking1 = new BookingDate();
                $booking1->order_id  =$order->id;
                $booking1->profile_id =$cart['profile_id'];
                $booking1->booking_date =$cart['date1'];
                $booking1->save();

                $booking2 = new BookingDate();
                $booking2->order_id  =$order->id;
                $booking2->profile_id =$cart['profile_id'];
                $booking2->booking_date =$cart['date2'];
                $booking2->save();

                $booking3 = new BookingDate();
                $booking3->order_id  =$order->id;
                $booking3->profile_id =$cart['profile_id'];
                $booking3->booking_date =$cart['date3'];
                $booking3->save();
            }
            else{
                $booking = new BookingDate();
                $booking->order_id  =$order->id;
                $booking->profile_id =$cart['profile_id'];
                $booking->booking_date =$cart['date'];
                $booking->save();
            }


        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('home')
                ->with('success', 'Transaction complete.');
                Session::forget('cart');
                Session::flash('success', 'Payment successful!');
        } else {
            return redirect()
                ->route('home')
                ->with('error', $response['message'] ?? 'Something went wrong.');
                Session::forget('cart');
                Session::flash('error', 'Payment not successful!');
        }
    }

    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('home')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}

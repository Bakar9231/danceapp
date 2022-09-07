<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\BookingDate;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.dashboard');
    }
    public function mybooking()
    {
        $data = Booking::with('profile','User')->where('user_id',Auth::user()->id)->orwhere('profile_id',Auth::user()->id)->get();
        // dd($data);
        return view('user.mybooking',compact('data'));
    }
    public function booking_detail(Request $request)
    {
        // dd($request->all());
        $event =  Profile::where('id',$request->event_id)->first();
        // dd($event); 
        return view('user.booking-detail',compact('event'));
    }
    public function booking_payment(Request $request)
    {
       $data = $request->all();
        // dd($data);
        return view('user.booking-payment',compact('data'));
    }
    public function booking_info(Request $request)
    {
        $data = $request->all();
        $refrence_id = mt_rand( 1000000000, 9999999999 );
        Session::forget('cart');
        Session::flash('success', 'Payment successful!');
         $cart = session()->get('cart', []);
        // if cart is empty then this the first product
         if(!$cart) {
            $cart = [
         
            "profile_id" => $request->profile_id,
            "booking_id" =>$refrence_id,
            "booking_type"=> $request->booking,
            "booking_tenure" => $request->recurring,
            "booking_rate" => $request->price,
            "service_charges" => 0,
            "date" => $request->date,
            "date1" => $request->date1,
            "date2" => $request->date2,
            "date3" => $request->date3,
            "total_amount" => $request->price,
            "agreement" => "yes",
            ];
            session()->put('cart', $cart);
            $booking = new Booking();
            $booking->profile_id = $cart['profile_id'];
            $booking->user_id = Auth::user()->id;
            $booking->booking_id = $cart['booking_id'];
            $booking->booking_type = $cart['booking_type'];
            $booking->booking_tenure = $cart['booking_tenure'];
            $booking->booking_rate = $cart['booking_rate'];
            $booking->service_charges = $cart['service_charges'];
            $booking->date = $cart['date'];
            $booking->total_amount = $cart['total_amount'];
            $booking->save();
        }
        return view('user.booking-info',compact('data','refrence_id'));
    }
    public function imagesStore(Request $request)
    {
        $path = public_path() . '/upload/Profile/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        if ($request->hasfile('file')) {
            $image = $request->file('file');
            $image_name = 'proimage'.uniqid().time().'.'.$image->getClientOriginalExtension();
            $image->move($path, $image_name);
            return response()->json([
                'name'          => $image_name,
                'original_name' => $image->getClientOriginalName()
            ]);
        }
    }

    public function imagesRemove(Request $request)
    {

        $filename =  $request->get('fileName');
        if(isset($filename) && !empty($filename)){
            // ProductImage::where('path', $filename)->delete();
            $path = public_path() . '/upload/Profile/'.$filename;
            if (file_exists($path)) {
                unlink($path);
            }
            return response()->json([
                'success' => "Image has been successfully removed!!",
            ]);
        }
    }
    public function status_booking(Request $request)
    {
        $id = $request->booking_id;
        Booking::where('id',$id)->update(['status'=>'Approved']);
        $response = \Response::json('success', 200);
    }
}
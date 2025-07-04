<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class PaymentController extends Controller
{
    public function index(Request $request, $bookingId)
    {
        $booking = Booking::with(['item.type', 'item.brand'])->findOrFail($bookingId);

        return view('payment', compact('booking'));
    }


    public function update(Request $request, $bookingId)
    {
        // load booking data
        $booking = Booking::findOrFail($bookingId);

        // set payment method 
        $booking->payment_method = $request->payment_method;

        // handle midtrans payment method
        if ($request->payment_method == 'midtrans') {
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');

            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');

            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');

            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
        }

            // // Get USD to IDR rate using guzzle
            // $client = new \GuzzleHttp\Client();
            // $response = $client->request('GET', 'https://api.exchangerate-api.com/v4/latest/USD');
            // $body = $response->getBody();
            // $rate = json_decode($body)->rates->IDR;

            // // Convert to IDR
            // $totalPrice = $booking->total_price * $rate;

            $totalPrice = $booking->total_price;

            // Create array for send to API
            $midtransParams = [
                'transaction_details' => [
                    'order_id' => "TESTING -" . $booking->id,
                    'gross_amount' => (int) $totalPrice,
                ],
                'customer_details' => [
                    'first_name' => $booking->name,
                    'email' => $booking->user->email,
                ],
                'enabled_payments' => ['gopay', 'bank_transfer'],
            ];

            // get snap payment page url
            $paymentUrl = \Midtrans\Snap::createTransaction($midtransParams)->redirect_url;
            
            // save payment
            $booking->payment_url = $paymentUrl;

            // save booking
            $booking->save();

            // redirect payment url
            return redirect($paymentUrl);



    }   

    public function success(Request $request)
    {
        return view('success');
    }
}

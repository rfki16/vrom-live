<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index(Request $request, $slug)
    {

        $item = Item::with(['type', 'brand'])->whereSlug($slug)->firstOrFail();
        return view('checkout', compact('item'));
    }

    public function store(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip' => 'required|string|max:5',
        ]);

        // format date
        $start_date = Carbon::createFromFormat('d m Y', $request->start_date);
        $end_date = Carbon::createFromFormat('d m Y', $request->end_date);

        // count number 
        $days = $start_date->diffInDays($end_date);

        // get item
        $item = Item::whereSlug($slug)->firstOrFail();

        $base_price = $days * $item->price;
        $tax = $base_price * 0.1;
        $total_price = $base_price + $tax;


        // create the booking
        $booking = $item->bookings()->create([
            'name' => $request->name,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'user_id' => auth()->user()->id,
            'total_price' => $total_price,
        ]);

        
        // redirect to payment
        return redirect()->route('front.payment', $booking->id);
    }
}

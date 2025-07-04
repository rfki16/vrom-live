<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class DetailController extends Controller
{
    public function index($slug)
    {
        $item = Item::with(['type', 'brand'])->whereSlug($slug)->firstOrFail();
        $similiarItems = Item::with(['type', 'brand'])->take(4)->where('id', '!=', $item->id)->get();
        return view('detail', compact('item', 'similiarItems'));
    }
}

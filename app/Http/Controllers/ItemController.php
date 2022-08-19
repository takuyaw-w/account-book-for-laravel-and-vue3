<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->only('category', 'price', 'note', 'purchase_date');
        Item::create([
            'user_id' => Auth::user()->id,
            'category' => $data['category'],
            'price' => $data['price'],
            'note' => $data['note'],
            'purchase_date' => $data['purchase_date'],
        ]);
        return view('dashboard.welcome');
    }
}

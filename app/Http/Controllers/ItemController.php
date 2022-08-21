<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Services\ItemService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function index()
    {
        $items = Item::whereUser(Auth::user()->id)->get();
        return view('home.index')->with(compact('items'));
    }
    //
    public function store(ItemRequest $request)
    {
        $storeData = $request->getStoreData();
        $this->itemService->store($storeData);
        return redirect(route('home'));
    }
}

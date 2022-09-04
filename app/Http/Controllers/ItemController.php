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
        $items = Item::whereUser(Auth::user()->id)->simplePaginate(5);
        $headers = collect([
            [
                'text' => 'カテゴリー',
                'value' => 'category',
                "href" => true
            ],
            [
                'text' => '金額',
                'value' => 'price',
            ],
            [
                'text' => '購入日',
                'value' => 'purchase_date',
            ],
        ]);
        return view('home.index')->with(compact('items', 'headers'));
    }

    public function store(ItemRequest $request)
    {
        $storeData = $request->getStoreData();
        $this->itemService->store($storeData);
        return redirect(route('home'));
    }

    public function summary()
    {
        $groupedItems = Item::select(\DB::raw("category, count(1) as count, sum(price) as price"))
            ->whereUser(Auth::user()->id)
            ->groupBy("category")
            ->get();
        $headers = collect([
            [
                'text' => 'カテゴリー',
                'value' => 'category'
            ],
            [
                'text' => '件数',
                'value' => 'count'
            ],
            [
                'text' => '合計金額',
                'value' => 'price'
            ],
        ]);
        $paths = collect([
            [
                "title" => 'Home',
                "disabled" => false,
                "href" => route("home"),
            ],
            [
                "title" => 'Summary',
                "disabled" => true,
                "href" => route("summary"),
            ],
        ]);
        return view("summary.index", compact("paths","headers","groupedItems"));
    }

    public function show(string $id)
    {
        $paths = collect([
            [
                "title" => 'Home',
                "disabled" => false,
                "href" => route("home"),
            ],
            [
                "title" => 'Detail',
                "disabled" => true,
                "href" => route("item.detail", $id),
            ],
        ]);
        $item = Item::where("id", $id)->first();
        return view("item.index", compact("paths", "item"));
    }

    public function update(Request $request)
    {
        $item = Item::where("id", $request->id)->first();
        $item->category = $request->category;
        $item->price = $request->price;
        $item->purchase_date = $request->purchase_date;
        $item->note = $request->note;
        $item->save();
        return redirect(route('home'));
    }
}

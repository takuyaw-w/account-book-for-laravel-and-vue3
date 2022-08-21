<?php

namespace App\Services;

use App\Models\Item;

class ItemService
{
    public function store(array $data): void
    {
        Item::create([
            'user_id' => $data['user_id'],
            'category' => $data['category'],
            'price' => $data['price'],
            'note' => $data['note'],
            'purchase_date' => $data['purchase_date'],
        ]);
    }
}

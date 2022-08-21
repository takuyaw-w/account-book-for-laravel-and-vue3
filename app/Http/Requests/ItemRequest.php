<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "category" => "required",
            "price" => "required|integer",
            "purchase_date" => "required|date",
            "note" => "nullable|max:20",
        ];
    }

    public function getStoreData()
    {
        return [
            "user_id" => $this->user()->id,
            "category" => $this->input('category'),
            "price" => $this->input('price'),
            "purchase_date" => $this->input('purchase_date'),
            "note" => $this->input('note')
        ];
    }
}

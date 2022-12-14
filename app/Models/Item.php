<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category',
        'price',
        'note',
        'purchase_date',
    ];

    protected $appends = ['href'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeWhereUser(Builder $builder,int $userId)
    {
        return $builder->where('user_id', $userId);
    }

    public function getHrefAttribute()
    {
        return array_key_exists("id", $this->attributes) ? route("item.detail", $this->attributes['id']) : null ;
    }
}

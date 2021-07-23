<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'image','description',
    ];

    protected $appends = ['amount_with_currency'];

    public function getAmountWithCurrencyAttribute()
    {
        return '$'.$this->price;
    }

    public function getImageAttribute($image)
    {
        return asset($image);
    }


     public function cart()
     {
        return $this->hasMany('App\Cart');
     }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'admin_id',
        'brand',
        'description',
        'note',
        'product_name',
        'product_type',
        'shipping_price',
        'style',
        'url',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/products/' . $this->getKey());
    }

    /* ************************ DB RELATIONSHIP ************************* */

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}

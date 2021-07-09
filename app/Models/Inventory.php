<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';

    protected $fillable = [
        'color',
        'cost_cents',
        'height',
        'length',
        'note',
        'price_cents',
        'product_id',
        'quantity',
        'sale_price_cents',
        'size',
        'sku',
        'weight',
        'width',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/inventories/'.$this->getKey());
    }

    /* ************************ DB RELATIONSHIP ************************* */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

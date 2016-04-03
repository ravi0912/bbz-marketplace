<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDealer extends Model
{
    protected $table = 'product_dealers';

    protected $fillable = [
        'product_id',
        'dealer_id',
        'price_range',
        'min_order',
        'supply_ability',
    ];
}

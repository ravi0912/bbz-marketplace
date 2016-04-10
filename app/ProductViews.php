<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductViews extends Model
{
    protected $table = 'product_views';

    protected $fillable = [
        'product_id',
        'views',
    ];
}

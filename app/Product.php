<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory', 'sub_category_id');
    }

    public function filters()
    {
        return $this->hasMany('App\FilterData');
    }

}

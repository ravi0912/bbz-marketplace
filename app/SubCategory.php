<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected  $table = 'sub_categories';

    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function filters()
    {
        return $this->hasMany('App\Filter','filter_id');
    }
    public function brand()
    {
        return $this->hasMany('App\Filter')->where('name', 'Brand');
    }



    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
}

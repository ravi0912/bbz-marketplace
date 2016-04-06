<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterData extends Model
{
    protected $table = 'filter_data';

    public function filterName()
    {
        return $this->belongsTo('App\Filter','filter_id');
    }

}

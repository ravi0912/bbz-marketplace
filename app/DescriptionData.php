<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescriptionData extends Model
{
    protected $table = 'description_data';

    public function descriptionName(){
        return $this->belongsTo('App\Description','description_id');
    }
}

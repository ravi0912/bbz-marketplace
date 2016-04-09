<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThumbnailImage extends Model
{
    protected $table = 'thumbnail_image';

    protected $fillable = [
        'product_id',
        'image_url',
    ];
}

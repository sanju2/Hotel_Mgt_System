<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour_type extends Model
{
    protected $fillable = [
        'id',
        'name',
        'total',
        'available',
        'description',
        'base_price'
    ];
}

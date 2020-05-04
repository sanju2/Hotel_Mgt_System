<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    protected $fillable = [
        'id',
        'place',
        'place',
        'availability',
        'status',
        'description',
        't_id'
    ];
}

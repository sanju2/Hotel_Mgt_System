<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class treserve extends Model
{
    protected $fillable = [
        'id',
        'cid',
        'tour_no',
        't_id',
        'resereved_date_time',
        'check_in',
        'check_out'
    ];
}

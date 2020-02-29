<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foodOrders extends Model
{
    protected $table='foodorders';
    protected $fillable=['Name','Address','orders','phoneNumber'];
   

   
}

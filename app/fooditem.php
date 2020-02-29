<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fooditem extends Model
{
    
    protected $table='fooditems';
    protected $fillable=['itemname','price','calorie','image','cat_id','description'];


    public function cats(){
        return $this->belongsTo('App\cats','cat_id');
      }
}

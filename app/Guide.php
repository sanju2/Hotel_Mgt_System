<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $table = 'guides';
    protected $fillable = ['first_name','last_name','dob','gender','guidequalifications','nic','mobileno','email','username','password','conpassword','image'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use app\Basket ; 
class Recipient extends Model
{
    Public function baskets()
    {
        return $this->hasMany(Basket::class , 'recipient_id');
    }
	

}

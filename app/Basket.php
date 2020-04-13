<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Recipient; 
class Basket extends Model
{
    public function recipient()
    {
        return $this->belongsTo(Recipient::class , 'recipient_id');
    }
}

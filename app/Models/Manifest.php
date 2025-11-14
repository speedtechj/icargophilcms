<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manifest extends Model
{
     protected $table = 'bookings';
      public function boxtype()
    {
        return $this->belongsTo(Boxtype::class);
    }
     public function batch(){
        return $this->belongsTo(Batch::class);
     }
    public function sender()
    {
        return $this->belongsTo(Sender::class);
    }
    public function receiver()
    {
        return $this->belongsTo(Receiver::class);
    }
    public function receiveraddress()
    {
        return $this->belongsTo(ReceiverAddress::class);
    }
    
}

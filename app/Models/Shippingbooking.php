<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shippingbooking extends Model
{
    protected $table = 'shippingbookings';

     public function shippingcontainer(){
        return $this->hasMany(Shippingcontainer::class);
    }
     public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shippingcontainer extends Model
{
    protected $table = 'shippingcontainers';
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receiveraddress extends Model
{
    protected $table = 'receiveraddresses';

    public function provincephil()
    {
        return $this->belongsTo(Provincephil::class);
    }
    public function cityphil()
    {
        return $this->belongsTo(Cityphil::class);
    }
    public function barangayphil()
    {
        return $this->belongsTo(Barangayphil::class);
    }

}

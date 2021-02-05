<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    use HasFactory;
    public function orders(){
        return $this->belongsTo('App\Models\Order');
    }
    public function products(){
        return $this->belongsTo('App\Models\Provider');
    }
}

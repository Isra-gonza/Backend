<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function orderLines(){
        return $this->hasMany('App\Models\OrderLine');
    }
}

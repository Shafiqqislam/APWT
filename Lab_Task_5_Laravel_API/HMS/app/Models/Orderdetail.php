<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Medicine;

class Orderdetail extends Model
{
    use HasFactory;
    public $timestamps   = false;

    public function medicine(){
        return $this->belongsTo(medicine::class);
    }
    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
}

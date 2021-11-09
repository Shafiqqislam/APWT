<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderdetail;

class Medicine extends Model
{
    use HasFactory;
    public $timestamps   = false;
    
    public function orders(){
        $this->hasMany(Orderdetail::class,'order_id');
    }
}

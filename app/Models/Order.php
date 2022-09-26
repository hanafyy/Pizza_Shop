<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use App\Pizza;

class Order extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function pizza(){
        return $this->belongsTo(pizza::class);
    }

}

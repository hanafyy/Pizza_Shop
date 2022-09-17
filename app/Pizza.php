<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;

class Pizza extends Model
{
    use HasFactory;
    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    //does the casting to change it to json and back to an array
    protected $casts = [
        'toppings' => 'array'
    ];
    
}

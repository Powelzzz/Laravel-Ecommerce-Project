<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name', 'rec_address', 'phone', 'user_id', 'product_id'
    ];
}

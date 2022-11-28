<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    use HasFactory;

    public function Order_items() {

    return $this->hasMany(Product::class);
    return $this->belongsTo(Order::class);
    }
}

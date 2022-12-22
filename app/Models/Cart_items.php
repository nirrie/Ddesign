<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart_items extends Model
{
    use HasFactory;

    public function cart_items()
    {
        return $this->belongsTo(Cart::class);
    }
}

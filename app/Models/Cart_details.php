<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
use Illuminate\Database\Eloquent\Model;

class Cart_details extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======
    //
    protected $table = 'cart_details';
    protected $fillable = [
        'cart_id', 'product_id', 'quantity', 'size', 'color', 'unit_price', 'total_price'
    ];
    public $timestamp = false;

    public function cart()
    {
        return $this->belongsTo(Carts::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
}

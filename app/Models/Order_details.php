<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======
    //
    protected $table = 'order_details';
    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'unit_price', 'total_price'
    ];
    public $timestamp = false;

    public function order()
    {
        return $this->belongsTo(Orders::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
}

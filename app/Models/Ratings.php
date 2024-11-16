<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======
    //
    protected $table = 'ratings';
    protected $fillable = [
        'product_id', 'user_id', 'rating', 'review'
    ];
    public $timestamp = false;

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
}

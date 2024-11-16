<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======
    //
    protected $table = 'orders';
    protected $fillable = ['user_id', 'date_order', 'total', 'status', 'created_at', 'updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(Order_details::class);
    }
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
}

<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
<<<<<<< HEAD
    use HasFactory;
=======
    //
    protected $table = 'products';
    protected $fillable = 
    [
        'name', 'description', 'price', 'size', 'color', 'stock', 'image', 'category_id', 'created_at', 'updated_at'
    ];
    
    public function cartDetails()
    {
        return $this->hasMany(Cart_details::class);
    }

    public function ratings()
    {
        return $this->hasMany(Ratings::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
>>>>>>> 5e6847e63bc83beaa0892defb3bfd290dc7bfce9
}

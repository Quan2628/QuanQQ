<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';
    protected $fillable = 
    [
        'name', 'description', 'price', 'size', 'color', 'stock', 'image', 'category_id', 'created_at', 'updated_at'
    ];
    public $timestamp = false;

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

    public function sizes()
    {
        return $this->belongsToMany(Sizes::class, 'product_variants')->withPivot('quantity');
    }

    public function colors()
    {
        return $this->belongsToMany(Colors::class, 'product_variants')->withPivot('quantity');
    }
}

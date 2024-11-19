<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    use HasFactory;

    protected $table = 'sizes';
    protected $fillable = ['name'];
    public $timestamp = false;

    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_variants')->withPivot('quantity');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    use HasFactory;

    protected $table = 'colors';
    protected $fillable = ['name', 'hex'];
    public $timestamp = false;

    public function products()
    {
        return $this->belongsToMany(Products::class, 'product_variants')->withPivot('quantity');
    }
}

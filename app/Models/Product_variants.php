<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_variants extends Model
{
    use HasFactory;

    protected $table = 'product_variants';
    protected $fillable = ['name', 'product_id', 'size_id', 'color_id', 'quantity'];
    public $timestamp = false;
}

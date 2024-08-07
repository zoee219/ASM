<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $primaryKey = 'product_id';
    public $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];
}

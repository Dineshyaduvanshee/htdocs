<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'weight',
        'serioul_no', // Added comma here
        'description',
        'Category', // Added comma here
        'Brand', // Added comma here
        'Stock', // Added comma here
        'Inventory', // Added comma here
        'Images', // Added comma here
        'Dimensions', // Added comma here
        'Colors', // Added comma here
        'Rating', // Added comma here
        'Reviews', // Added comma here
        'Availability', // Added comma here
        'SKU', // Added comma here
        'Specifications'
    ];
    
}

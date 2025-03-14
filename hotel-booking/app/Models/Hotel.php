<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    // Bu alanların toplu atamasına izin ver
    protected $fillable = [
        'name',
        'location',
        'address',
        'phone',
        'price',
        'description',
        'stars',
        'has_wifi',
        'has_parking',
        'has_pool',
        'has_restaurant',
        'has_spa',
        'has_gym',
        'is_pet_friendly',
        'has_beach_access',
        'amenities'
    ];

    protected $casts = [
        'has_wifi' => 'boolean',
        'has_parking' => 'boolean',
        'has_pool' => 'boolean',
        'has_restaurant' => 'boolean',
        'has_spa' => 'boolean',
        'has_gym' => 'boolean',
        'is_pet_friendly' => 'boolean',
        'has_beach_access' => 'boolean',
        'stars' => 'integer',
        'price' => 'decimal:2'
    ];
}

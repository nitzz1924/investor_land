<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyListing extends Model
{
    protected $fillable = [
        'usertype',
        'roleid',
        'property_name',
        'discription',
        'price',
        'squarefoot',
        'bedroom',
        'bathroom',
        'floor',
        'city',
        'address',
        'thumbnail',
        'category',
        'gallery',
        'documents',
        'videos',
        'status',
    ];
}

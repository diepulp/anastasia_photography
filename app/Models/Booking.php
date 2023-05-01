<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Provides fillable values (the ones that are allowed to be altered)
    protected $fillable = [
        'name',
        'type',
        'location',
    ];

    // Everything that is provided in th array is fillale
    // protected $guarded = ['id'];

    //assing default key for the route
    // public function getRouteKeyName()
    // {
    //     return "id";
    // }
}

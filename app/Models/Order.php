<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    function nowTime()
    {
        $data = now();
        base_path();
    }

    function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

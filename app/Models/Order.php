<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // public function material()
    // {
    //     // return $this->hasMany('Trip', ['id', 'route_name', 'source_file'], ['route_id', 'route_name', 'source_file']);
    //     return $this->belongsTo(User::class);
    // }
}
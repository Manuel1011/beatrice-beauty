<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'service',
        'preferred_date',
        'preferred_time',
        'message',
        'status',
    ];
}
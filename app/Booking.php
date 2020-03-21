<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_number',
        'room_name',
        'guest_name',
        'date',
    ];
}

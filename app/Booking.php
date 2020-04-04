<?php
// StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
// No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_number',
        'room_name',
        'guest_name',
        'date',
        'rooms_id',
    ];
}

<?php
// StAuth10065: I Prerak Patel, 000825410 certify that this material is my original work. 
// No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index',['isActive' => 'active']);
    }
}

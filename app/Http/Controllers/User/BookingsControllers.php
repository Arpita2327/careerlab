<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingsControllers extends Controller
{
    public function bookings()
    {
        return view('user.booking');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonsController extends Controller
{
    public function lessonBooking()
    {
        $user = Auth::user();

        return view('lessonBooking', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserSpaceController extends Controller
{
    public function dashboard(): View
    {
        return view('pur.dashboard', ['user' => Auth::user()]);
    }

    public function profile(): View
    {
        return view('pur.profile', ['user' => Auth::user()]);
    }
}
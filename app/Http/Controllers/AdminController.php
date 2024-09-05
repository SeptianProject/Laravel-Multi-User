<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function index()
    {
        return view('dashboard');
    }
    public function operator()
    {
        return view('dashboard');
    }
    public function keuangan()
    {
        return view('dashboard');
    }
    public function marketing()
    {
        return view('dashboard');
    }
}
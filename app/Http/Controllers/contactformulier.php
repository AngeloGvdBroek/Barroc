<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactformulier extends Controller
{
    public function dashboard()
    {
        return view('contactformulier/index');
    }
}

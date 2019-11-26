<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productpage extends Controller
{
    public function dashboard()
    {
        return view('productpage/index');
    }
}

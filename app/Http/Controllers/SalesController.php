<?php

namespace App\Http\Controllers;

use App\sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function dashboard()
    {
        return view('sales/index');
    }
}

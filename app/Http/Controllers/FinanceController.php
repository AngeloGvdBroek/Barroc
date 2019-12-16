<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function dashboard() 
    {
    	$quotes = \App\Quotation::all();

        return view('finance/index', ['quotes' => $quotes]);
    }
}

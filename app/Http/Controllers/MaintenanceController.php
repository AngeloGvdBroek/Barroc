<?php

namespace App\Http\Controllers;

use App\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function dashboard()
    {
        return view('maintenance/index');
    }
}

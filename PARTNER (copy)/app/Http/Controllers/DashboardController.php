<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
      
        $totalAmount = 1000; 
        $totalStatements = 50; 

        return view("dashboard", compact('totalAmount', 'totalStatements'));
    }

    public function __invoke()
    {
        return $this->dashboard();
    }
}

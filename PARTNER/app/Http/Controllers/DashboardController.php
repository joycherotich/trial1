<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // You can add any logic here to fetch data for the dashboard
        // For example, fetching total amount, total statements, etc.
        $totalAmount = 1000; // Replace with your logic to get total amount
        $totalStatements = 50; // Replace with your logic to get total statements

        return view("dashboard", compact('totalAmount', 'totalStatements'));
    }

    public function __invoke()
    {
        return $this->dashboard();
    }
}

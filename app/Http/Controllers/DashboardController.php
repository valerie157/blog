<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal; // Import the Deal model

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $deals = Deal::all(); // Retrieve all deals from the database
        return view('dashboard', ['deals' => $deals]); // Pass deals to the dashboard view
    }
}



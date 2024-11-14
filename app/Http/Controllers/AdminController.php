<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('Layout.Backend.Admin_dashboard.index');
    }

    public function adminTable()
    {
        return view('Layout.Backend.Admin_dashboard.table');
    }
    public function adminChart()
    {
        return view('Layout.Backend.Admin_dashboard.charts');
    }
}

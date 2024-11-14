<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function agenceDashboard()
    {
        return view('Layout.Backend.Agence_dashboard.index');
    }

    public function agenceTable()
    {
        return view('Layout.Backend.Agence_dashboard.table');
    }
    public function agenceChart()
    {
        return view('Layout.Backend.Agence_dashboard.charts');
    }
}

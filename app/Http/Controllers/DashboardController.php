<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('dashboard');
    }
}

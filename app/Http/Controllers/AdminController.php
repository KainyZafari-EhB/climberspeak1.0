<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // render the admin dashboard view (create resources/views/admin/dashboard.blade.php)
        return view('admin.dashboard');
    }
}

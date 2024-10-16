<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function homeadmin()
    {
        
        return view('dashboard.index', [
            "title" => "Dashboard",
        ]);
    }

}

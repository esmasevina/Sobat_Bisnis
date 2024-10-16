<?php

namespace App\Http\Controllers;
use App\Models\Edubisnis;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function home()
    {
        return view('index', [
            "title" => "Home",
        ]);
    }

    function about()
    {
        return view('about', [
            "title" => "About",
        ]);
    }
   
}

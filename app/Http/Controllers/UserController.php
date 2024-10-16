<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
    function edukasibisnis()
    {
        return view('edukasibisnis', [
            "title" => "Edukasi Bisnis",
        ]);
    }

    function edubisnisdetails()
    {
        return view('edubisnis-details', [
            "title" => "Konten Instagram Makanan",
        ]);
    }
    function edubisnisdetails1()
    {
        return view('edubisnis-details1', [
            "title" => "Tips Bisnis Kue Kering",
        ]);
    }

    function kursusbisnis()
    {
        return view('kursusbisnis', [
            "title" => "Kursus Bisnis",
        ]);
    }
    
    function kursusbisnisdetail()
    {
        return view('kursus-bisnis-detail', [
            "title" => "Pelatihan Digital UMKM",
        ]);
    }
    function kursusbisnisdetail1()
    {
        return view('kursus-bisnis-detail1', [
            "title" => "Bussiness Analisyst",
        ]);
    }
    
}

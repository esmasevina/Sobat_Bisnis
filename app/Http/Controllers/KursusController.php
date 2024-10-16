<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursusbisnis;

class KursusController extends Controller
{
    function kursusbisnis()
    {
        return view('cobakursus', [
            "title" => "Kursus Bisnis",
            "kursusbisnis" => kursusbisnis::all(),

        ]);
    }

    function kursusdetail(Kursusbisnis $data)
    {
        return view('detailkursus', [
            "title" => "Kursus Bisnis Detail",
            "kursusdetail" => $data,
        ]);
    }
}

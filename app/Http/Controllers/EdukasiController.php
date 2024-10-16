<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Edubisnis;

class EdukasiController extends Controller
{
    function edubisnis()
    {
        return view('cobaedukasi', [
            "title" => "Edukasi Bisnis",
            "edubisnis" => edubisnis::all()
        ]);
    }

    function detailedu(Edubisnis $data)
    {
        return view('cobadetail', [
            "title" => "Edukasi Bisnis Detail",
            "edudetail" => $data,
        ]);
    }
   
}

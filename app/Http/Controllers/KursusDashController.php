<?php

namespace App\Http\Controllers;

use App\Models\Kursusbisnis;
use Illuminate\Http\Request;

class KursusDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kursusbisnis.addkursus',[
            "title" => "Kursus Bisnis",
            "kursusbisnis" => kursusbisnis::all()
        ]
    );
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();
        $validatedData = $request -> validate([
            'juduldepan' => 'required|max:225',
            'tema' => 'required|max:225',
            'title' => 'required|max:225',
            'isi' => 'required|max:225',
            'tanggaldaftar' => 'required|max:225',
            'tanggaltutup' => 'required|max:225',
            'tanggalmulai' => 'required|max:225',
            'durasi' => 'required|max:225',
            'kelaslive' => 'required|max:225',
            'harga' => 'required|max:225',
            'link' => 'required|max:225',
            'foto' => 'image|file|max:1024',
        ]);
        
        if($request->file('foto')){
            $validatedData['foto']= $request->file('foto')->store('post-images');
        }
        Edubisnis::create($validatedData);
        return redirect('/dashboard/postskursus')->with('addSuccess', 'Konten Baru Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kursusbisnis  $kursusbisnis
     * @return \Illuminate\Http\Response
     */
    public function show(Kursusbisnis $kursusbisnis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kursusbisnis  $kursusbisnis
     * @return \Illuminate\Http\Response
     */
    public function edit(Kursusbisnis $kursusbisnis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kursusbisnis  $kursusbisnis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kursusbisnis $kursusbisnis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kursusbisnis  $kursusbisnis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kursusbisnis $kursusbisnis)
    {
        //
    }
}

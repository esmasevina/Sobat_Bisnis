<?php

namespace App\Http\Controllers;

use App\Models\Edubisnis;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.edukasibisnis.addedukasi',[
            "title" => "Edukasi Bisnis",
            "edubisnis" => edubisnis::all()
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
      
        $validatedData = $request -> validate([
            'filter' => 'required|max:225',
            'juduldepan' => 'required|max:225',
            'tema' => 'required|max:225',
            'title' => 'required|max:225',
            'author' => 'required|max:225',
            'publish_at' => 'required|max:225',
            'titlebawah' => 'required|max:225',
            'foto' => 'image|file|max:1024',
            'kontenatas' => 'required',
            'kontenbawah' => 'required',  
        ]);
        
        if($request->file('foto')){
            $validatedData['foto']= $request->file('foto')->store('post-images');
        }
        Edubisnis::create($validatedData);
        return redirect('/dashboard/postsedukasi')->with('addSuccess', 'Konten Baru Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edubisnis  $edubisnis
     * @return \Illuminate\Http\Response
     */
    public function show(Edubisnis $edubisnis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edubisnis  $edubisnis
     * @return \Illuminate\Http\Response
     */
    public function edit(Edubisnis $edubisnis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edubisnis  $edubisnis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edubisnis $edubisnis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edubisnis  $edubisnis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edubisnis $edubisnis)
    {
        //
    }
}

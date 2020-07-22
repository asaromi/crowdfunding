<?php

namespace App\Http\Controllers;

use App\Kampanye;
use Illuminate\Http\Request;

class KampanyeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kampanye/create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'instansi' => 'required',
            'target' => 'required',
            'deskripsi' => 'required',
            // 'jumlah' => 'required',
            'lokasi' => 'required',
            'tenggat' => 'required',
        ]);

        $kampanye = new Kampanye([
            'perusahaans' => $request->get('perusahaans'),
            'judul' => $request->get('judul'),
            'id_instansi' => $request->get('instansi'),
            'target' => $request->get('target'),
            'deskripsi' => $request->get('deskripsi'),
            'jumlah' => 0,
            'lokasi' => $request->get('lokasi'),
            'tenggat' => $request->get('tenggat'),
            'status' => 'Ongoing',
        ]);

        $saved = $kampanye->save();

        if($saved)
            return redirect('/home');

        else
            return redirect('/create');

        // if ($catatan->user != Auth::user()->id) {
        //     return redirect('catatan')->with('failed', 'Anda tidak diperbolehkan menambah catatan untuk user lain!');
        // } else {
        //     $saved = $catatan->save();
        //     if ($saved) {
        //         return redirect('catatan')->with('success', 'Catatan berhasil ditambahkan!');
        //     } else {
        //         return redirect('catatan')->with('failed', 'Gagal menambahkan catatan!');
        //     }
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kampanye  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function show(Kampanye $kampanye)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kampanye  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function edit(Kampanye $kampanye)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kampanye  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kampanye $kampanye)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kampanye  $kampanye
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kampanye $kampanye)
    {
        //
    }
    public function detail()
    {
        return view('kampanye/detail');
    
    }
}

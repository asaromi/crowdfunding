<?php

namespace App\Http\Controllers;

use App\instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(instansi $instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit(instansi $instansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instansi $instansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(instansi $instansi)
    {
        //
    }

    public function instansi()
    
    {
        return view('instansi/instansi');
    
    }
}

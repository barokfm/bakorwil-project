<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = Peminjam::all();
        return view('formulir', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeminjamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama_peminjam'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'no_ktp'=>'required',
            'foto_ktp'=>'required',
            'agenda'=>'required',
            'tgl_acara'=>'required',
            'waktu'=>'required'
        ]);

        // store image
        // $image = $request->file('image');
        // $image->storeAs('public/peminjam', $image->hashName());

        Peminjam::create([
            'nama_peminjam'=> $request->nama_peminjam,
            'alamat'=> $request->alamat,
            'email' => $request->email,
            'no_hp'=> $request->no_hp,
            'no_ktp'=> $request->no_ktp,
            'foto_ktp'=>$request->foto_ktp,
            'agenda'=> $request->agenda,
            'tgl_acara'=> $request->tgl_acara,
            'waktu'=> $request->waktu,
        ]);

        return view('home')->with(['success'=>'Akhirnya bisa, Anjing!!!!!!!!!!'] );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjam $peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjam $peminjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeminjamRequest  $request
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjam $peminjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjam $peminjam)
    {
        //
    }
}

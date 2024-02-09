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
        return view('formulir', [
            'title' => 'Form Peminjam',
        ]);
    }

    public function cetak($id)
    {
        $peminjam = Peminjam::find($id);

        return view('user.cetak', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('formulir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeminjamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('foto_ktp')->store('avatar');
        // return $request->image;
        $validatedData = $this->validate($request, [
            'nama_peminjam'=>'required',
            'alamat'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'no_ktp'=>'required',
            'foto_ktp'=>'image|file|max:1024',
            'agenda'=>'required',
            'tgl_acara'=>'required',
            'waktu'=>'required',
            'sound_system'=> 'required',
            'kursi'=> 'required',
            'area'=> 'required',
            'ac'=> 'required'
        ]);

        // store image
        $validatedData['foto_ktp'] = $request->file('foto_ktp')->store('peminjam');

        Peminjam::create($validatedData);
        return redirect('/')->with('success', 'Data Berhasil disimpan!');
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

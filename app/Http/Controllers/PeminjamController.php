<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Models\Peralatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatans = Peralatan::get();
        // dd($peralatans);

        return view('formulir', [
            'title' => 'Form Peminjam',
        ], compact('peralatans'));
    }

    public function cetak($id)
    {
        $peminjam = Peminjam::find($id);

        return view('user.admin.cetak', compact('peminjam'));
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
            'nama_peminjam' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_ktp' => 'required',
            'foto_ktp' => 'image|file|max:1024',
            'agenda' => 'required',
            'tgl_acara' => 'required',
            'waktu' => 'required',
            'sound_system' => 'required',
            'kursi' => 'required',
            'area' => 'required',
            'ac' => 'required'
        ]);

        // store image
        $validatedData['foto_ktp'] = $request->file('foto_ktp')->store('peminjam');

        Peminjam::create($validatedData);
        return redirect()->route('peralatan')->with('success', 'Data Berhasil disimpan!');
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
    public function edit(string $id): View
    {
        // Get the data by ID
        $peminjam = Peminjam::findOrFail($id);

        return view('user.admin.edit', [
            'title' => 'Edit Data'
        ], compact('peminjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeminjamRequest  $request
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $this->validate($request, [
            'nama_peminjam' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_ktp' => 'required',
            'foto_ktp' => 'image|file|max:1024',
            'agenda' => 'required',
            'tgl_acara' => 'required',
            'waktu' => 'required',
            'sound_system' => 'required',
            'kursi' => 'required',
            'area' => 'required',
            'ac' => 'required'
        ]);

        $peminjam = Peminjam::findOrFail($id);

        // cek apakah ada gambar dalam request
        if($request->hasFile('foto_ktp')){
            // Hapus gambar lama
            Storage::delete('peminjam/'.$peminjam->foto_ktp);

            // Upload gambar baru
            $validatedData['foto_ktp'] = $request->file('foto_ktp')->store('peminjam');


            // update data dengan gambar yang baru
            $peminjam->update($validatedData);
        }else {
            $peminjam->update($validatedData);
        }

        return redirect()->route('data')->with(['success' => 'Data berhasil Diubah!']);

    }

    public function izinkan($id)
    {
        $peminjam = Peminjam::find($id);

        if (auth()->user()->role === 'kepala') {
            $peminjam->update([
                'status_kepala' => true
            ]);

            $peminjam->save();
        } else {
            $peminjam->update([
                'status_sekertaris' => true
            ]);
        }

        $peminjam->save();

        return redirect()->route('data')->with(['success' => 'Peminjam Berhasil diapproved!']);
    }

    public function tolak($id)
    {
        $peminjam = Peminjam::find($id);

        $peminjam->update([
            'status_kepala' => false
        ]);

        $peminjam->save();

        return redirect()->route('data')->with(['success' => 'Peminjam Berhasil didisapproved!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $peminjam = Peminjam::findOrFail($id);

        Storage::delete('public/peminjam'.$peminjam->foto_peminjam);

        $peminjam->delete();

        return redirect()->route('data')->with(['success' => 'Data berhasil Dihapus']);
    }
}

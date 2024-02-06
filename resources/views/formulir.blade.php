@extends('layouts.main')

@section('main')
    <div class="container text-center text-align-center py-3 rounded my-4 shadow-sm bg-primary-subtle">
        <h1>Formulir Data Peminjam</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container bg-body-tertiary py-2 rounded shadow mb-3">
        <form action="{{ route('form_peminjaman') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_peminjam" class="form-label">Nama Peminjam<small class="text-danger">*</small></label>
                <input type="text" class="form-control" placeholder="John Doe" name="nama_peminjam" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<small class="text-danger">*</small></label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="no-telp" class="form-label">Nomor HP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_hp" required>
            </div>
            <div class="mb-3">
                <label for="no_ktp" class="form-label">No. KTP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_ktp" required>
            </div>
            <label for="photo" class="form-label">Foto KTP<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input class="form-control" type="file" name="foto_ktp" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Agenda<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="agenda">
            </div>
            <label for="date" class="form-label">Tanggal Acara<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input type="date" name="tgl_acara" class="from-control text-secondary" id="date" required>
                </div>
            </div>
            <label for="time" class="form-label">Waktu Acara<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input type="time" name="waktu" class="from-control text-secondary" id="time" required>
                </div>
            </div>

            <div class="container d-flex justify-content-end gap-3 m-3">
                <a href="#" class="btn btn-danger pb-2 px-5">Cancel</a>
                <button class="btn btn-primary pb-2 px-5" type="submit" value="save">Lanjut</button>
            </div>
        </form>
    </div>
@endsection

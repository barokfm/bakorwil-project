@extends('user.layouts.utama')

@section('main-page')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Data</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <form action="/edit/{{ $peminjam->id_peminjam }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_peminjam" class="form-label">Nama Peminjam<small class="text-danger">*</small></label>
                <input type="text" class="form-control" placeholder="John Doe" name="nama_peminjam" required value="{{ $peminjam->nama_peminjam }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="alamat" required value="{{ $peminjam->alamat}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<small class="text-danger">*</small></label>
                <input type="email" class="form-control" name="email" required value="{{ $peminjam->email}}" >
            </div>
            <div class="mb-3">
                <label for="no-telp" class="form-label">Nomor HP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_hp" required value="{{ $peminjam->no_hp}}" >
            </div>
            <div class="mb-3">
                <label for="no_ktp" class="form-label">No. KTP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_ktp" required value="{{ $peminjam->no_ktp}}" >
            </div>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <label for="photo" class="form-label">Foto KTP<small class="text-danger">*</small></label>
                <img class="img-preview img-fluid mb-3 col-sm-3" src="/storage/{{ $peminjam->foto_ktp }}">
                <div class="my-2">
                    <input class="form-control @error('foto_ktp') is-invalid @enderror" id="image" type="file"
                        name="foto_ktp" onchange="previewImage()">
                    @error('foto_ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Agenda<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="agenda" required value="{{ $peminjam->agenda }}">
            </div>
            <label for="date" class="form-label">Tanggal Acara<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input type="date" name="tgl_acara" class="from-control text-secondary" id="date" required value="{{ $peminjam->tgl_acara}}" >
                </div>
            </div>
            <label for="time" class="form-label">Waktu Acara<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input type="time" name="waktu" class="from-control text-secondary" id="time" required value="{{ $peminjam->waktu}}" >
                </div>
            </div>
            <label for="sound_system" class="form-label mt-3">Sound System<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sound_system" {{ $peminjam->sound_system === 'ya' ? 'checked' : '' }} id="sound_system" value="ya">
                    <label class="form-check-label" for="sound_system">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sound_system" {{ $peminjam->sound_system === 'tidak' ? 'checked' : '' }} id="sound_system" value="tidak">
                    <label class="form-check-label" for="sound_system">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="kursi" class="form-label">Kursi Vernekel<small class="text-danger">*</small></label>
                <input type="number" class="form-control" name="kursi" placeholder="Persediaan Kursi 150 Buah"
                    required max="150" value="{{ $peminjam->kursi }}">
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">Area Kantor Dan Halaman<small
                        class="text-danger">*</small></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="area" {{ $peminjam->sound_system === 'ya' ? 'checked' : '' }} value="ya">
                    <label class="form-check-label" for="area">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" {{ !$peminjam->sound_system === 'tidak' ? '' : 'checked' }} name="area" value="tidak">
                    <label class="form-check-label" for="area">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="ac" class="form-label">Air Conditioner (AC)<small class="text-danger">*</small></label>
                <input type="number" class="form-control" name="ac" placeholder="Persediaan AC 8 Unit" value="{{ $peminjam->ac }}" required>
            </div>
            <div class="container d-flex justify-content-end gap-3 m-3">
                <a href="/data" class="btn btn-danger pb-2 px-5">Cancel</a>
                <button class="btn btn-primary pb-2 px-5" type="submit" value="save">Save</button>
            </div>
        </form>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>

    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection

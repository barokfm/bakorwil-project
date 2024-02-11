@extends('layouts.main')

@section('main')
    <div class="container text-center text-align-center py-3 rounded my-4 shadow-sm bg-primary-subtle">
        <h1>Formulir Peralatan</h1>
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
    <div class="container bg-white py-2 rounded shadow mb-3">
        {{-- <div class="container bg-success-subtle p-4 rounded">
            <span>Masukkan 1 untuk kolom Gedung dan Area</span>
        </div> --}}
        <form action="{{ route('form_peminjaman') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach ($peralatans as $peralatan)
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="nama_peminjam" class="form-label">{{ $peralatan->nama }}<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="{{ $peralatan->id }}" required>
            </div>
            @endforeach
            <div class="container d-flex justify-content-end gap-3 m-3">
                <a href="/" class="btn btn-danger pb-2 px-5">Cancel</a>
                <button class="btn btn-primary pb-2 px-5" type="submit" value="save">Next</button>
            </div>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection

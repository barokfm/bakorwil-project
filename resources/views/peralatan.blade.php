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
        <form action="{{ route('form_peralatan') }}" method="POST">
            @csrf
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="gedung" class="form-label">Kursi Vernekel<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="jumlah_kursi" required>
                <small class="text-muted"><i><small class="text-danger">*</small>Tentukan jumlah kursi vernekel yang anda butuhkan!</i></small>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="gedung" class="form-label">AC<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="jumlah_ac" required>
                <small class="text-muted"><i><small class="text-danger">*</small>Tentukan jumlah AC yang anda butuhkan!</i></small>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="sound_system" class="form-label">Sound System<small class="text-danger">*</small></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sound_system" id="sound_system" value="ya">
                    <label class="form-check-label" for="sound_system">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sound_system" id="sound_system" value="tidak">
                    <label class="form-check-label" for="sound_system">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="space_promotion" class="form-label">Space Promotion<small class="text-danger">*</small></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="space_promotion" id="space_promotion" value="ya">
                    <label class="form-check-label" for="space_promotion">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="space_promotion" id="space_promotion" value="tidak">
                    <label class="form-check-label" for="space_promotion">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="area_kantor" class="form-label">Area Kantor dan Halaman<small class="text-danger">*</small></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="area_kantor" id="area_kantor" value="ya">
                    <label class="form-check-label" for="area_kantor">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="area_kantor" id="area_kantor" value="tidak">
                    <label class="form-check-label" for="area_kantor">
                        Tidak
                    </label>
                </div>
            </div>


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

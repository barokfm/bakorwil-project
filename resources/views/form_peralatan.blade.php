@extends('layouts.main')

@section('main')
    <div class="container text-center text-align-center py-3 rounded my-4 shadow-sm bg-primary-subtle">
        <h1>Formulir Data Inventaris</h1>
    </div>
    <div class="container bg-body-tertiary py-2 rounded shadow mb-3">
        <div class="mb-3">
            <label for="text" class="form-label">Kursi Vernekel<small class="text-danger">*</small></label>
            <input type="number" class="form-control" id="name" placeholder="Persediaan Kursi 150 Buah" required maxlength="150">
        </div>
        <div class="mb-3">
            <label for="text1" class="form-label">Sound System<small class="text-danger">*</small></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Tidak
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="text2" class="form-label">Area Kantor Dan Halaman<small class="text-danger">*</small></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1"
                    checked>
                <label class="form-check-label" for="exampleRadios1">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Tidak
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Air Conditioner (AC)<small class="text-danger">*</small></label>
            <input type="number" max="8" class="form-control" id="name" placeholder="Persediaan AC 8 Unit" required>
        </div>


        <div class="container d-flex justify-content-end gap-3">
            <a href="#" class="btn btn-primary pb-2 px-5">Submit</a>
            <a href="#" class="btn btn-danger pb-2 px-5">Cancel</a>
        </div>
    </div>
@endsection

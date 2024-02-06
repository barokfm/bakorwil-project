<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PeminjamController;
use App\Models\Peminjam;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function(){
    return view('home');
});

Route::get('/formulir', function(){
    return view('formulir');
});

// Route::get('/form_peralatan', function(){
//     return view('form_peralatan');
// });

Route::get('/surat', function(){
    return view('surat');
});
Route::get('/admin', function(){
    return view('admin/admin');
});

Route::get('/dataadmin', function(){
    return view('admin/dataadmin');
});

Route::get('/datakepala', function(){
    return view('admin/datakepala');
});
Route::get('/kepala', function(){
    return view('admin/kepala');
});
Route::get('/crud', function(){
    return view('crud');
});
Route::get('/login', [LoginController::class, 'index']);

Route::post('login', [LoginController::class, 'authenticate'])->name('login');

Route::get('/rincian', function(){
    return view('rincian');
});

Route::resource('form_peminjaman', PeminjamController::class);

Route::post('form_peminjaman', [PeminjamController::class, 'store'])->name('form_peminjaman');


// Route::get('/',[Sesicintroller::class, 'index']);
// Route::get('/',[Sesicintroller::class, 'index']);

// Route::get('/',[AdminController::class, 'index']);
// Route::get('/',[Sesicintroller::class, 'logout']);

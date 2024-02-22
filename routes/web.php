<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\KepalaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Transaksi;
use App\Http\Controllers\TransaksiController;
use App\Models\Peminjam;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [GedungController::class, 'index'] );

Route::get('/formulir/{id}', [PeminjamController::class, 'index']);
Route::get('/peralatan', [PeralatanController::class, 'index']);

// Route::get('/form_peralatan', function(){
//     return view('form_peralatan');
// });

// Route::get('/surat', function(){
//     return view('surat');
// });
// Route::get('/admin', function(){
//     return view('admin/admin');
// });

// Route::get('/dataadmin', function(){
//     return view('admin/dataadmin');
// });

// Route::get('/datakepala', function(){
//     return view('admin/datakepala');
// });
// Route::get('/kepala', function(){
//     return view('admin/kepala');
// });
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', function(){
    return 'What are you doing, bitch!';
})->middleware('guest');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth');

// Route::resource('form_peminjaman', PeminjamController::class);
Route::post('/form_peminjam', [PeminjamController::class, 'store'])->name('form_peminjam');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/data', [PeminjamController::class, 'index'], [
    'title' => 'Data Peminjam'
])->middleware('auth');
Route::get('/edit/{id}', [PeminjamController::class, 'edit']);
Route::post('/edit/{id}', [PeminjamController::class, 'update']);
Route::get('/hapus/{id}', [PeminjamController::class, 'destroy']);

Route::get('/data', [DataController::class, 'index'])->name('data')->middleware('auth');

Route::get('/cetak/{id}', [PeminjamController::class, 'cetak'])->middleware('auth');
Route::post('/kepala/{id}', [PeminjamController::class, 'izinkan']);
Route::post('/sekertaris/{id}', [PeminjamController::class, 'izinkan']);
Route::post('/kepalaTolak/{id}', [PeminjamController::class, 'tolak']);

Route::get('/peralatan', [PeralatanController::class, 'index'])->name('peralatan');

Route::get('/transaksi', [TransaksiController::class, 'index']);

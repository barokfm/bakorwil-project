<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PeralatanController;
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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/formulir', [PeminjamController::class, 'index']);
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
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::resource('form_peminjaman', PeminjamController::class);
Route::post('form_peminjaman', [PeminjamController::class, 'store'])->name('form_peminjaman');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


// Route::get('/',[Sesicintroller::class, 'index']);
// Route::get('/',[Sesicintroller::class, 'index']);

// Route::get('/',[AdminController::class, 'index']);
// Route::get('/',[Sesicintroller::class, 'logout']);

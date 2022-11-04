<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return '<h3>Selamat Belajar Laravel 9</h3>';
});


Route::get('/salam', function () {
    return view('page_salam');
});

Route::get('/pegawai/{nama}/{divisi}', function ($nama, $divisi) {
    return '<ol>
                <li>Nama: ' . $nama . '</li>    
                <li>Divisi: ' . $divisi . '</li>       
            </ol>';
});

Route::get('/nilai1', function () {
    return view('nilai');
});

Route::get('/mahasiswa', [mahasiswaController::class, 'dataMahasiswa']);
Route::get('/nilai', [mahasiswaController::class, 'nilaiMahasiswa']);

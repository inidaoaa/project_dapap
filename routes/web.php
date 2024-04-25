<?php

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

Route::get('/about', function () {

    $nama = "Daffa";
    $jk = "laki";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "content creator";
    $alamat = "TCI 2";   

    return view('data_diri', compact('nama', 'jk', 'pendidikan_terakhir', 'pekerjaan', 'alamat'));
});


Route::get('/me', function () {

    $nama = "Daoa";
    $lahir = "Bandung";
    $umur = "17";
    $penggemar = "Manchester United";
    $ig = "dappmzi";
    $game = "Free Fire Mek";
    $id_ff = "1015656077";

 return view('aku', compact('nama', 'lahir', 'umur', 'penggemar', 'ig', 'game', 'id_ff'));
});



Route::get('/bio2/{nama}/{jk}/{pt}/{pekerjaan}/{alamat}', function (Request $Request , $nama , $jk , $pt , $pekerjaan , $alamat ) {
    
    $nama2 = $nama;
    $jk2 = $jk;
    $pt2 = $pt;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;
    
    return view('biodata2' , compact('nama2' , 'jk2' , 'pt2', 'pekerjaan2' , 'alamat2'));
});


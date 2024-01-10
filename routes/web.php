<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\M4Controller;
use App\Http\Controllers\CVController;
use App\Http\Controllers\M5Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Minggu ke- 9//
Route::middleware('auth')->group(function(){
    //ANGGOTA
    Route::resource('anggota', AnggotaController::class)->parameters(['anggota' => 'anggota']);
    
    // PENJUALAN
    Route::resource('peminjaman', PeminjamanController::class)->parameters(['anggota' => 'anggota']);

    // KATEGORI
    Route::resource('kategori', KategoriController::class);
    // kategori
    // kateori/create
    // kategori
    //

    //PASSWORD
    Route::get('password', [UserController::class, 'password'])->name('user.password');
    Route::post('password', [UserController::class, 'passwordAction'])->name('user.password.action');

    // PRODUK
    Route::resource('buku', BukuController::class);
    
    //USER
    Route::get('logout', [UserController::class,'logout'])->name('user.logout');
    Route::get('/', [PageController::class,'home'])->name('home');
    Route::get('user',[UserController::class,'index'])->name('user.index');
    Route::resource('user', UserController::class);
});



//minggu ke-7//
Route::get('user', [UserController::class,'index'])->name('user.index');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'loginAction'])->name('user.login.action');


//MINGGU KE-6//
Route::get('m5/segitiga', [M5Controller::class, 'segitiga']);
Route::post('m5/segitiga_action', [M5Controller::class, 'segitigaAction'])->name('m5.segitiga.action');



//MINGGU KE-5//
Route::get('/m5/lat1', [M5Controller::class, 'lat1']);
Route::get('m5/lat2', [M5Controller::class, 'lat2']);
Route::post('m5/lat2_action', [M5Controller::class, 'lat2Action'])->name('m5.lat2.action');

//Tugas Minggu ke-5//
Route::get('m5/balok', [M5Controller::class, 'balok']);
Route::post('m5/balok_action', [M5Controller::class, 'balokAction'])->name('m5.balok.action');



//MINGGU KE-4
Route::get('m4/lat1', [M4Controller::class, 'lat1']);
Route::get('m4/lat2', [M4Controller::class, 'lat2']);
Route::get('m4/lat3', [M4Controller::class, 'lat3']);



Route::get('m4/pendidikan', [M4Controller::class, 'm4_pendidikan'])->name('m4.pendidikan');

Route::get('m4/skill', [M4Controller::class, 'm4_skill'])->name('m4.skill');

Route::get('m4/identitas', [M4Controller::class, 'm4_identitas'])->name('m4.identitas');




Route::get('/pendidikan', [CVController::class, 'pendidikan'])->name('pendidikan');

Route::get('/kontak', [CVController::class, 'kontak'])->name('kontak');

Route::get('/identitas', [CVController::class, 'identitas'])->name('identitas');


//Route ::view('/home', 'home');

Route:: get ('/awal/', function (){
    $url = route('kontak');
    return '<a href="' . $url . '">Klik di sini untuk kontak saya </a>';
});

// Route:: get ('/kontak/', function (){
//     $url = route('kontak');
//     return 'Ini adalah halaman kontak';
// })->name('kontak');

Route::get('detail/{nama}/{alamat}', function ($nama,$alamat ='') {
    echo 'hallo,nama saya adalah '. $nama .', alama saya di '.$alamat ;
});

Route::get('tampil/{nama}', function ($nama) {
    echo 'hallo,nama saya adalah '. $nama;
});


Route::get('greeting', function () {
    echo ('hallo,saya Ayu Pande');
});

// export
Route::get('export/peminjaman', [ExportController::class, 'export'])->name('export.peminjaman');



// Route::get('/', function () {
//     return view('welcome');
// });


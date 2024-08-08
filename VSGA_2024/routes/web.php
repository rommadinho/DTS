<?php

use App\Http\Controllers\CRUController;
use App\Http\Controllers\CRUDPhoto;
use App\Http\Controllers\pageControllerSatu;
use App\Http\Controllers\pengajarController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return 'hello VSGA';
});

Route::get('/word',function(){
    return 'hello Dunia';
});

Route::get('/about',function(){
    return 'NIM : 2231740016';
});

Route::get('/user/{name}',function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/{comment}',function ($post,$comment) {
    return 'Pos ke- '.$post ."Komentar ke-:" . $comment;
});

Route::get('/user/{name?}',function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/kodebarang/{jenis?}/{merek?}',function($jk='k01',$mrk='nokia'){
    return "kode barang $jk dan nama barang $mrk";
});

Route::get ('about', function () {
    return view ('tampil');
})->name('tampil');

Route::get('tampil', function (){
    return view('tampil');
})->name('tampil');

Route::get('/pesandisini',function() {
    return '<h1> pesan disini </h1>';
});
Route::redirect('/contact-us','/pesandisini');

Route::get('/polinema/dosen',function(){
    return "<h1> daftar nama dosen</h1>";
});
Route::get('/polinema/tendik',function(){
    return "<h1>daftar nama tendik</h1>";
});
Route::get('/polinema/jurusan',function(){
    return"<h1> daftar nama jurusan</h1>";
});

Route::prefix('/polinema')->group(function(){
    Route::get('/polinema/dosen',function(){
        return "<h1> daftar dosen</h1>";
    });
    Route::get('/polinema/tendik',function(){
        return "<h1>daftar tendik</h1>";
    });
    Route::get('/polinema/jurusan',function(){
        return"<h1> daftar jurusan</h1>";
    });
});

Route::prefix('/admin')->group(function(){
    Route::get('/polinema/dosen',function(){
        return "<h1> daftar dosen</h1>";
    });
    Route::get('/polinema/tendik',function(){
        return "<h1>daftar tendik</h1>";
    });
    Route::get('/polinema/jurusan',function(){
        return"<h1> daftar jurusan</h1>";
    });
});

Route::fallback(function(){
    return "maaf,alamat ini tidak ditemukan";
});

Route::get('/daftar-dosen',[pengajarController::class,'daftarPengajar']);
Route::get('/tabel-pengajar',[pengajarController::class,'tabelPengajar']);
Route::get('/blog-pengajar',[pengajarController::class,'blogPengajar']);

Route::get('/pasar-buah',[pageControllerSatu::class,'satu']);

Route::resource('crud',CRUController::class);

Route::resource('photos',CRUDPhoto::class)->only([
    'index','show'
]);

Route::resource('photos',CRUDPhoto::class)->except([
    'create','store','update','destroy'
]);

Route::get('/greeting',[
    WelcomeController::class,'greeting'
]);
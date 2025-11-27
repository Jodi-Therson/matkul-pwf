<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

Route::get('/', function () {
    return view('halo', ['name' => 'Cok Ace']);
});

Route::get('/produk', [produkController::class, 'index']);
Route::get('/produk/show1', [produkController::class, 'show1']);
Route::get('/produk/show2', [produkController::class, 'show2']);

Route::get('/halaman', function () {
    $title = 'Harry Pooter';
    $content = 'harry potter and the deathly hallows: part 2';
    return view('halaman', compact('title', 'content'));
});

Route::get('/beranda', function () {
    return view('beranda');
});
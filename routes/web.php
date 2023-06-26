<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\ViewName;
use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

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
    return view('home',[
        "title" => "home",
        "name" => "Halaman home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "name" => "Halaman About",
        "email" => "mohakimi2005@gmail.com",
        "image" => "emu.png"
    ]);
});
Route::get('/rendang', function () {
    return view('rendang',[
        "title" => "rendang",
        "name" => "Halaman tentang rendang"
    ]);
});
Route::get('/gulai', function () {
    return view('gulaiayam',[
        "title" => "gulai ayam",
        "name" => "Halaman tentang gulai ayam"
    ]);
});
Route::get('/satepadang', function () {
    return view('satepadang',[
        "title" => "sate padang",
        "name" => "Halaman tentang sate padang"
    ]);
});
Route::get('/nasipadang', function () {
    return view('nasipadang',[
        "title" => "nasi padang",
        "name" => "Halaman tentang nasi padang"
    ]);
});
Route::get('/samballado', function () {
    return view('samballado',[
        "title" => "sambal lado",
        "name" => "Halaman tentang sambal lado"
    ]);
});
Route::get('/gulaitambusu', function () {
    return view('gulaitambusu',[
        "title" => "gulai tambusu",
        "name" => "Halaman tentang gulai tambusu"
    ]);
});

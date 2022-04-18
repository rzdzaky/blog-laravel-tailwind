<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Dzaki Rozaan",
        "email" => "dzakirz@gmail.com",
        "gambar" => "dzaki.png",
    ]);
});


Route::get('posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

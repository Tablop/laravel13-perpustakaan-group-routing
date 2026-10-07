<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::prefix("perpustakaan")->group(function () {
    Route::get("/buku", function () {
        return view("buku");
    });
    Route::get("/anggota", function () {
        return view("anggota");
    });
    Route::get("/peminjaman", function () {
        return view("peminjaman");
    });
});

<?php
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    $username = "SDM";
    $productCount = 7;
    return view('dashboard', compact('username', 'productCount'));
});


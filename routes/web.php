<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/', function () {
    return view('index');
});

// livewire components
// Route::get('/counter', Counter::class);

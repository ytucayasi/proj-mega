<?php

use App\Livewire\Pages\Public\Acerca;
use App\Livewire\Pages\Public\Galeria;
use App\Livewire\Pages\Public\Horario;
use App\Livewire\Pages\Public\Inicio;
use App\Livewire\Pages\Public\Precios;
use Illuminate\Support\Facades\Route;

Route::get('/', Inicio::class);
Route::get('/acerca', Acerca::class);
Route::get('/horario', Horario::class);
Route::get('/galeria', Galeria::class);
Route::get('/precios', Precios::class);

/* Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
 */
/* require __DIR__ . '/auth.php';
 */
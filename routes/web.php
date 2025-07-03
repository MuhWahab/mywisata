<?php
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get(uri: '/', action: function (): View {
    return view(view: 'auth.login');
});

Auth::routes();

Route::get(uri: '/menu', action: [App\Http\Controllers\HomeController::class, 'menu'])->name(name: 'menu');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name(name: 'home');

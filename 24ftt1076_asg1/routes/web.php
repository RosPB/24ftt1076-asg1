<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/', 'home')->name('home');
Route::get('/', function(){
    $messages = DB::table('messages')->get();
    return view('home', ['messages' => $messages]);
})->name('home');

Route::view('/messages', 'messages');
Route::post('/messages', function(){
    $text = request('text');
    DB::table('messages')->insert([
        'text' => $text,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return redirect('/messages');
})->name('messages.store');

Route::view('/about', 'about');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');
});

require __DIR__.'/auth.php';

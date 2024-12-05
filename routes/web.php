<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\GirlfriendForHireIndex;
use App\Livewire\GirlfriendForHireCreate;
use App\Livewire\GirlfriendForHireEdit;
use App\Http\Controllers\GirlfriendForHireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
//profile routing
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// controller routes
Route::get('/girlfriends', GirlfriendForHireIndex::class)->name('girlfriend.index');
Route::get('/girlfriends/create', GirlfriendForHireCreate::class)->name('girlfriend.create');
Route::get('/girlfriends/{id}/edit', GirlfriendForHireEdit::class)->name('girlfriend.edit');
Route::get('/rent-a-girl', [GirlfriendForHireController::class, 'index'])->name('rent-a-girl');
Route::delete('/rent-a-girl/{id}', [GirlfriendForHireController::class, 'destroy'])->name('rent-a-girl.destroy');

Route::resource('girlfriend-for-hire', GirlfriendForHireController::class);



require __DIR__.'/auth.php';

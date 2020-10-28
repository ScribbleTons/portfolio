<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return Inertia\Inertia::render('Portfolio/VisitorPage');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');    
Route::get('/download/{file}', [DownloadsController::class, 'download'])->name('download');


Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/dashboard',[HomeController::class, 'index']);
    Route::get('/contact/list', [ContactController::class, 'index'])->name('contact.list');
    Route::get('/contact/{contact}', [ContactController::class, 'show'])->name('contact.view');
    Route::delete('/contact/{contact}', [ContactController::class, 'trash'])->name('contact.trash');
    Route::get('/contact/list/trash', [ContactController::class, 'trashBin'])->name('contact.trash.list');
    Route::put('/contact/{contact}/restore', [ContactController::class, 'restore'])->name('contact.restore');
    Route::delete('/contact/{contact}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});

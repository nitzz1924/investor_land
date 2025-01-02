<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminViews;
Route::get('admin/login', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminViews::class, 'dashboard'])->name('dashboard');
});

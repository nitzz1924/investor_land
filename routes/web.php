<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminViews;
use App\Http\Controllers\AdminStores;


Route::get('admin/login', function () {
    return view('auth.login');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('admin/login');
})->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('AdminPanelPages.dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/admindashboard', [AdminViews::class, 'admindashboard'])->name('admin.admindashboard');
    Route::get('/master', [AdminViews::class, 'master'])->name('admin.master');
    Route::post('/createmaster', [AdminStores::class, 'createmaster'])->name('admin.createmaster');
    Route::get('/deletemaster/{id}', [AdminStores::class, 'deletemaster'])->name('admin.deletemaster');
    Route::post('/updatemaster', [AdminStores::class, 'updatemaster'])->name('admin.updatemaster');

});









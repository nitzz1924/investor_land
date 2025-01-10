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
    Route::get('admin/dashboard', [AdminViews::class, 'admindashboard'])->name('admin.admindashboard');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/master', [AdminViews::class, 'master'])->name('admin.master');
    Route::post('/createmaster', [AdminStores::class, 'createmaster'])->name('admin.createmaster');
    Route::get('/deletemaster/{id}', [AdminStores::class, 'deletemaster'])->name('admin.deletemaster');
    Route::post('/updatemaster', [AdminStores::class, 'updatemaster'])->name('admin.updatemaster');
    Route::get('/companyprofile', [AdminViews::class, 'companyprofile'])->name('admin.companyprofile');
    Route::post('/addcompanydetails', [AdminStores::class, 'addcompanydetails'])->name('admin.addcompanydetails');
    Route::post('/updateregistercompany', [AdminStores::class, 'updateregistercompany'])->name('admin.updateregistercompany');
    Route::get('/myprofile', [AdminViews::class, 'myprofile'])->name('admin.myprofile');
    Route::post('/updatemyprofile', [AdminStores::class, 'updatemyprofile'])->name('admin.updatemyprofile');
    Route::get('/addproperty', [AdminViews::class, 'addproperty'])->name('admin.addproperty');
    Route::post('/insertlisting', [AdminStores::class, 'insertlisting'])->name('admin.insertlisting');
    Route::get('/editproperty/{id}', [AdminViews::class, 'editproperty'])->name('admin.editproperty');
    Route::post('/updatelisting', [AdminStores::class, 'updatelisting'])->name('admin.updatelisting');
});









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
    Route::get('/allproperties', [AdminViews::class, 'allproperties'])->name('admin.allproperties');
    Route::get('/deletelisting/{id}', [AdminStores::class, 'deletelisting'])->name('admin.deletelisting');
    Route::get('/viewproperty/{id}', [AdminViews::class, 'viewproperty'])->name('admin.viewproperty');
    Route::get('/leadslist', [AdminViews::class, 'leadslist'])->name('admin.leadslist');
    Route::post('/insertfollowup', [AdminStores::class, 'insertfollowup'])->name('admin.insertfollowup');
    Route::get('/deletelead/{id}', [AdminStores::class, 'deletelead'])->name('admin.deletelead');
    Route::post('/updatelead', [AdminStores::class, 'updatelead'])->name('admin.updatelead');
    Route::get('/leadstatusfilter/{status}', [AdminViews::class, 'leadstatusfilter'])->name('admin.leadstatusfilter');
    Route::post('/datefilterleads', [AdminViews::class, 'datefilterleads'])->name('admin.datefilterleads');
    Route::get('/leadslistkaban', [AdminViews::class, 'leadslistkaban'])->name('admin.leadslistkaban');
    Route::post('/updateLeadStatusKanban', [AdminViews::class, 'updateLeadStatusKanban'])->name('admin.updateLeadStatusKanban');
    Route::get('/addblog', [AdminViews::class, 'addblog'])->name('admin.addblog');
    Route::get('/blogslist', [AdminViews::class, 'blogslist'])->name('admin.blogslist');
    Route::post('/submitblog', [AdminStores::class, 'submitblog'])->name('admin.submitblog');
    Route::get('/editblog/{id}', [AdminViews::class, 'editblog'])->name('admin.editblog');
    Route::post('/updateblog', [AdminStores::class, 'updateblog'])->name('admin.updateblog');
    Route::get('/deleteblog/{id}', [AdminStores::class, 'deleteblog'])->name('admin.deleteblog');

});









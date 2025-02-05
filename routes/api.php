<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
use App\Http\Controllers\ApiMasterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PropertyListing;
use App\Models\Blog;
use App\Models\Master;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(ApiMasterController::class)->group(function(){
    Route::post('/login-user', 'loginuser')->name('api.loginuser');
    Route::post('/register-user', 'registeruser')->name('api.registeruser');
    Route::get('/blogs', 'blogs')->name('api.blogs');
    Route::get('/property-listings', 'propertylistings')->name('api.propertylistings');
    Route::get('/get-categories', 'getcategories')->name('api.getcategories');
    Route::get('/property-details/{id}', 'propertydetails')->name('api.propertydetails');

});

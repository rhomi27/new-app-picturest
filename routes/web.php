<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacebookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(["not.authen"])->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('login');
});

Route::get('/signout', [AuthController::class, 'signOut'])->name('auth.signout');
Route::post('/auth/sign-up', [AuthController::class, 'signUp'])->name('auth.signup');
Route::post('/auth/sign-in', [AuthController::class,'signIn'])->name('auth.signin');

Route::controller(ExploreController::class)->group(function(){
    Route::get('/picturest/explore', 'index')->name('picturest.explore');
    Route::get('/picturest/photos/show=', 'show');
});

Route::controller(FacebookController::class)->group(function () {
    Route::get('/auth/facebook', 'redirect')->name('auth.facebook');
    Route::get('/auth/facebook/callback', 'callbackFacebook')->name('facebook.callback');
});

Route::middleware(['authen'])->group(function () {
    Route::get('/home', [PhotoController::class, 'index'])->name('home');
    Route::get('/picturest/home/getdata',[PhotoController::class,'getdataHome'])->name('getdata');
    Route::get('/picturest/photo/show={photo:uuid}', [PhotoController::class,'detail']);
    Route::get('/picturest/upload', [PhotoController::class, 'create'])->name('picturest.upload');
    Route::get('/picturest/upload/photodraf={photo:uuid}', [PhotoController::class, 'update'])->name('picturest.upload.draf');
    Route::get('/picturest/photodraf', [PhotoController::class, 'photoDraf']);
    Route::post('/picturest/upload/photos', [PhotoController::class,'upload'])->name('upload.photos');


    Route::get('/picturest/profile/@_{user:name}', [ProfileController::class,'index']);
    Route::get('/picturest/edit-profile',[ProfileController::class,'show'])->name('edit.profile');
    Route::post('/picturest/edit-avatar',[ProfileController::class,'editAvatar'])->name('edit.avatar');
    Route::get('/picturest/delete-avatar',[ProfileController::class,'deleteAvatar']);
    Route::post('/picturest/editprofile',[ProfileController::class,'updateProfile'])->name('update.profile');
    Route::get('/picturest/profile/private',[ProfileController::class,'photoPrivate']);
    Route::get('/picturest/profile/publish',[ProfileController::class,'photoPublish']);

    Route::get('/picturest/message',[MessageController::class,'index'])->name('picturest.message');
    Route::get('/picturest/getusermsg/={user:id}',[MessageController::class, 'getUser']);
    Route::post('/picturest/sendmessage',[MessageController::class,'sendMessage']);

});

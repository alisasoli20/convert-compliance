<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['App\Http\Controllers\FrontController','login'])->name('/');

Route::get('/home',["App\\Http\\Controllers\\FrontController","home"])->name("home")->middleware('auth');

Route::group(['prefix'=>'admin'], function (){
    Route::get('/',["App\\Http\\Controllers\\AdminController","dashboard"])->name('admin');
    Route::get('/users',['App\Http\Controllers\AdminController','users'])->name('admin.users');
    Route::get('/user/add',['App\Http\Controllers\AdminController','addUser'])->name('admin.user.add');
    Route::post('/user/add',['App\Http\Controllers\AdminController','storeUser']);
});


Route::get('/{page}',\App\Http\Controllers\FrontController::class)
    ->name('page')
    ->middleware('auth');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('contact-us',['App\Http\Controllers\FrontController','contactUs'])->name('contact-us');

require __DIR__.'/auth.php';

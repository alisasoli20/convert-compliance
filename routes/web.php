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

Route::get('/test',function(){
    return auth()->user()->hasPermissionTo('Information Technology');
});

Route::get('/home',["App\\Http\\Controllers\\FrontController","home"])->name("home")->middleware('auth');

Route::group(['prefix'=>'admin', 'middleware' => ['auth', 'role:Admin']], function (){
    Route::get('/',["App\\Http\\Controllers\\AdminController","dashboard"])->name('admin');
    Route::get('/users',['App\Http\Controllers\AdminController','users'])->name('admin.users');
    Route::get('/user/add',['App\Http\Controllers\AdminController','addUser'])->name('admin.user.add');
    Route::post('/user/add',['App\Http\Controllers\AdminController','storeUser']);
    Route::get('/user/edit/{id}',['App\Http\Controllers\AdminController','editUser']);
    Route::get('/roles',['App\Http\Controllers\AdminController','roles'])->name('admin.roles');
    Route::group(['prefix' => 'role'], function (){
        Route::get('/add',['App\Http\Controllers\AdminController','addRole'])->name('admin.role.add');
        Route::post('/add',['App\Http\Controllers\AdminController','storeRole']);
        Route::get('/edit/{id}',['App\Http\Controllers\AdminController','editRole'])->name('admin.role.edit');
        Route::post('/edit/{id}',['App\Http\Controllers\AdminController','updateRole']);
        Route::post('/delete/{id}',['App\Http\Controllers\AdminController','deleteRole'])->name('admin.role.delete');
    });
    Route::get('/permissions',['App\Http\Controllers\PermissionController','index'])->name('admin.permissions');
    Route::group(['prefix' => 'permission'], function (){
        Route::get('/add',['App\Http\Controllers\PermissionController','create'])->name('admin.permission.add');
        Route::post('/add',['App\Http\Controllers\PermissionController','store']);
        Route::get('/edit/{id}',['App\Http\Controllers\PermissionController','edit'])->name('admin.permission.edit');
        Route::post('/edit/{id}',['App\Http\Controllers\PermissionController','update']);
        Route::post('/delete/{id}',['App\Http\Controllers\PermissionController','destroy'])->name('admin.permission.delete');
    });

});


Route::get('/{page}',\App\Http\Controllers\FrontController::class)
    ->name('page')
    ->middleware(['auth','role_or_permission:Admin|Information Technology']);



Route::get('contact-us',['App\Http\Controllers\FrontController','contactUs'])->name('contact-us');

require __DIR__.'/auth.php';

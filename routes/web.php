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


// FrontController Routes
Route::get('/test',['App\Http\Controllers\FrontController','test']);
Route::get('/pdf-test',['App\Http\Controllers\FrontController','pdf']);
Route::get('/incident',['App\Http\Controllers\FrontController','incident']);
Route::get('/privacy-policy',['App\Http\Controllers\FrontController','privacyPolicy']);

Route::post('/submit/review/{id}',['App\Http\Controllers\FrontController','submitForReview'])->name('submit.for.review');
Route::post('/submit/message/{id}',['App\Http\Controllers\FrontController','submitMessage'])->name('submit.message');
Route::get('/discard/message/{id}/{model}',['App\Http\Controllers\FrontController','discardMessage'])->name('discard.message');
Route::get('/add/message/{title}',['App\Http\Controllers\FrontController','addMessage'])->name('add.message');
Route::post('/save/message/{model}',['App\Http\Controllers\FrontController','saveMessage'])->name('save.message');

Route::get('/home',["App\\Http\\Controllers\\FrontController","home"])->name("home")->middleware('auth');

Route::group(['prefix'=>'admin', 'middleware' => ['auth', 'role:Admin']], function (){
    Route::get('/',["App\\Http\\Controllers\\AdminController","dashboard"])->name('admin');
    Route::get('/users',['App\Http\Controllers\AdminController','users'])->name('admin.users');
    Route::group(['prefix' => 'user'], function (){
        Route::get('/add',['App\Http\Controllers\AdminController','addUser'])->name('admin.user.add');
        Route::post('/add',['App\Http\Controllers\AdminController','storeUser']);
        Route::get('/edit/{id}',['App\Http\Controllers\AdminController','editUser'])->name('admin.user.edit');
        Route::post('/edit/{id}',['App\Http\Controllers\AdminController','updateUser']);
        Route::post('/delete/{id}',['App\Http\Controllers\AdminController','deleteUser'])->name('admin.user.delete');
    });

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
    Route::get('/departments',['App\Http\Controllers\DepartmentController','index'])->name('admin.departments');
    Route::group(['prefix' => 'department'],function (){
        Route::get('/edit/{id}',['App\Http\Controllers\DepartmentController','edit'])->name('admin.department.edit');
        Route::post('/edit/{id}',['App\Http\Controllers\DepartmentController','update']);
    });

});


Route::get('/{page}',\App\Http\Controllers\FrontController::class)
    ->name('page')
    ->middleware(['auth']);



Route::get('contact-us',['App\Http\Controllers\FrontController','contactUs'])->name('contact-us');

require __DIR__.'/auth.php';

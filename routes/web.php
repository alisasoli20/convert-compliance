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


// FrontController Routes
//Route::get('/test',['App\Http\Controllers\FrontController','test']);
//Route::get('/pdf-test',['App\Http\Controllers\FrontController','pdf']);


Route::group(['middleware' => 'auth'],function(){
    Route::get('/meeting/log/{model}/{id}',['App\Http\Controllers\FrontController','meetingLog'])->name('meeting.log');
    Route::post('/meeting/log/action/{model}/{id}',['App\Http\Controllers\FrontController','saveActionLog'])->name('save.action.log');
    Route::post('/meeting/log/decision/{model}/{id}',['App\Http\Controllers\FrontController','saveDecisionLog'])->name('save.decision.log');

    Route::get('/incident',['App\Http\Controllers\IncidentController','index']);
    Route::get('/edit/incident/{id}',['App\Http\Controllers\IncidentController','edit'])->name('edit.incident');
    Route::post('/edit/incident/{id}',['App\Http\Controllers\IncidentController','update']);
    Route::post('/add/incident',['App\Http\Controllers\IncidentController','store'])->name('add.incident');
    Route::get('download/pdf/{pdf}',['App\Http\Controllers\FrontController','downloadPDF'])->name('download.pdf');

    Route::get('/privacy-policy',['App\Http\Controllers\PrivacyPolicyController','index']);
    Route::get('/add/policy',['App\Http\Controllers\PrivacyPolicyController','create'])->name('add.policy');
    Route::get('/edit/policy/{id}',['App\Http\Controllers\PrivacyPolicyController','edit'])->name('edit.policy');
    Route::post('/edit/policy/{id}',['App\Http\Controllers\PrivacyPolicyController','update']);
    Route::post('/add/policy',['App\Http\Controllers\PrivacyPolicyController','store']);

    Route::get('/process',['App\Http\Controllers\ProcessController','index']);
    Route::get('/add/process',['App\Http\Controllers\ProcessController','create'])->name('add.process');
    Route::get('/edit/process/{id}',['App\Http\Controllers\ProcessController','edit'])->name('edit.process');
    Route::post('/edit/process/{id}',['App\Http\Controllers\ProcessController','update']);
    Route::post('/add/process',['App\Http\Controllers\ProcessController','store']);

    Route::post('/submit/review/{id}',['App\Http\Controllers\FrontController','submitForReview'])->name('submit.for.review');
    Route::post('/submit/message/{id}',['App\Http\Controllers\FrontController','submitMessage'])->name('submit.message');
    Route::get('/discard/message/{id}/{model}',['App\Http\Controllers\FrontController','discardMessage'])->name('discard.message');
    Route::get('/add/message/{title}',['App\Http\Controllers\FrontController','addMessage'])->name('add.message');
    Route::post('/save/message/{model}',['App\Http\Controllers\FrontController','saveMessage'])->name('save.message');
    Route::get('/save/changes/{id}/{model}',['App\Http\Controllers\FrontController','saveChanges'])->name('save.changes');
    Route::post('/save/changes/{id}/{model}',['App\Http\Controllers\FrontController','submitChanges']);

    Route::post('/save/contact/us',['App\Http\Controllers\ContactUsController','store'])->name('save.contact.us');
});


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

    Route::get('/contact/us',['App\Http\Controllers\ContactUsController','index'])->name('admin.contact.us');
    Route::delete('/contact/us/{id}',['App\Http\Controllers\ContactUsController','destroy'])->name('admin.delete.contact.us');

});



Route::get('contact-us',['App\Http\Controllers\FrontController','contactUs'])->name('contact-us');
Route::get('idea',['App\Http\Controllers\FrontController','idea'])->name('idea');
Route::get('how-it-works',['App\Http\Controllers\FrontController','howItWorks'])->name('how-it-works');

Route::get('/{page}',\App\Http\Controllers\FrontController::class)
    ->name('page')
    ->middleware(['auth']);




require __DIR__.'/auth.php';

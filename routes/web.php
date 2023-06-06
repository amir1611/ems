<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::prefix('staff')->name('staff.')->group(function () {
    Route::group(['middleware' => ['auth', 'verified', 'user-role:staff']], function () {
        Route::get('/profile', [HomeController::class, 'indexStaff'])->name('home');
        Route::get('/consultation/manage', [ConsultationController::class, 'manage'])->name('consultation.manage');
        Route::get('/consultant/manage', [ConsultantController::class, 'manage'])->name('consultant.manage');
        Route::get('/consultant/create', [ConsultantController::class, 'create'])->name('consultant.create');
        Route::put('/consultant/store', [ConsultantController::class, 'store'])->name('consultant.store');
    });
});

Route::group(['middleware' => ['auth', 'verified', 'user-role:staff']], function () {
    Route::get('/', [HomeController::class, 'indexStaff'])->name('home');
});

Route::prefix('user')->name('user.')->group(function () {


    Route::group(['middleware' => ['auth', 'verified', 'user-role:user']], function () {
        Route::get('/profile', [HomeController::class, 'indexUser'])->name('home');
        Route::post('/profile', [HomeController::class, 'updatePassword'])->name('update-password');
        Route::put('/{id}/update', [UserController::class, 'update'])->name('update');
        Route::get('/consultation/manage', [ConsultationController::class, 'userManage'])->name('consultation.manage');
        Route::get('/consultation/create', [ConsultationController::class, 'create'])->name('consultation.create');
        Route::put('/consultation/store', [ConsultationController::class, 'store'])->name('consultation.store');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::group(['middleware' => ['auth', 'verified', 'user-role:admin']], function () {
        Route::get('/', [HomeController::class, 'indexAdmin'])->name('home');
    });
});

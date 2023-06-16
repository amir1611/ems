<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrepCourseController;
use App\Http\Controllers\ApplicationController;

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
        Route::put('/{id}/update', [UserController::class, 'update'])->name('update');
        Route::get('/profile', [HomeController::class, 'indexStaff'])->name('home');
        Route::post('/profile', [HomeController::class, 'updatePassword'])->name('update-password-staff');
        Route::get('/consultation/manage', [ConsultationController::class, 'manage'])->name('consultation.manage');
        Route::get('/consultation/{id}/edit', [ConsultationController::class, 'edit'])->name('consultation.edit');
        Route::put('/consultation/update/{id}', [ConsultationController::class, 'update'])->name('consultation.update');
        Route::get('/consultant/manage', [ConsultantController::class, 'manage'])->name('consultant.manage');
        Route::get('/consultant/create', [ConsultantController::class, 'create'])->name('consultant.create');
        Route::put('/consultant/store', [ConsultantController::class, 'store'])->name('consultant.store');

        Route::get('/prepCourse/applicantList', [PrepCourseController::class, 'show']);
    });
});

Route::group(['middleware' => ['auth', 'verified', 'user-role:staff']], function () {
    Route::get('/', [HomeController::class, 'indexStaff'])->name('home');
});



Route::prefix('user')->name('user.')->group(function () {


    Route::group(['middleware' => ['auth', 'verified', 'user-role:user']], function () {
        Route::get('/profile', [HomeController::class, 'indexUser'])->name('home');
        Route::post('/profile', [HomeController::class, 'updatePassword'])->name('update-password-user');
        Route::put('/{id}/update', [UserController::class, 'update'])->name('update');
        Route::get('/consultation/manage', [ConsultationController::class, 'userManage'])->name('consultation.manage');
        Route::get('/consultation/create', [ConsultationController::class, 'create'])->name('consultation.create');
        Route::put('/consultation/store', [ConsultationController::class, 'store'])->name('consultation.store');
        Route::get('/prepCourse/manage', [PrepCourseController::class, 'manage'])->name('prepCourse.manage');
        Route::get('/prepCourse/create', [PrepCourseController::class, 'create'])->name('prepCourse.create');
        Route::put('/prepCourse/store', [PrepCourseController::class, 'store'])->name('prepCourse.store');

        Route::get('/prepCourse/payment', [PrepCourseController::class, 'createForm']);
        Route::post('/prepCourse/payment', [PrepCourseController::class, 'payment'])->name('prepCourse.payment');

        Route::get('/application/manage', [ApplicationController::class, 'manage'])->name('application.manage');
        Route::get('/application/create', [ApplicationController::class, 'create'])->name('application.create');
        Route::put('/application/store', [ApplicationController::class, 'store'])->name('application.store');

        Route::get('/application/document', [ApplicationController::class, 'createForm']);
        Route::post('/application/document', [ApplicationController::class, 'payment'])->name('application.document');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::group(['middleware' => ['auth', 'verified', 'user-role:admin']], function () {
        Route::get('/', [HomeController::class, 'indexAdmin'])->name('home');
    });
});

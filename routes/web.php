<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\ConsultationController;
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
		Route::get('/', [HomeController::class, 'indexStaff'])->name('home');
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
		Route::get('/', [HomeController::class, 'indexUser'])->name('home');
	});
	
});

Route::prefix('admin')->name('admin.')->group(function () {
	
	Route::group(['middleware' => ['auth', 'verified', 'user-role:admin']], function () {
		Route::get('/', [HomeController::class, 'indexAdmin'])->name('home');
	});
	
});



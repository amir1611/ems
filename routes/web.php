<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => ['auth', 'verified', 'user-role:admin']], function () {
	Route::get('/admin', [HomeController::class, 'indexAdmin'])->name('admin.home');
});;

Route::group(['middleware' => ['auth', 'verified', 'user-role:staff']], function () {
	Route::get('/staff', [HomeController::class, 'indexStaff'])->name('staff.home');
});;

Route::group(['middleware' => ['auth', 'verified', 'user-role:user']], function () {
	Route::get('/user', [HomeController::class, 'indexUser'])->name('user.home');
});;
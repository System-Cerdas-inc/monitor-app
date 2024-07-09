<?php

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\OpdController;
use App\Http\Controllers\Security\RolePermission;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UptdController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidasiController;
use Illuminate\Support\Facades\Artisan;
// Packages
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

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

require __DIR__ . '/auth.php';

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

//UI Pages Routs
Route::get('/', [HomeController::class, 'signin'])->name('auth.signin');

Route::group(['middleware' => 'auth'], function () {
    // Permission Module
    Route::get('/role-permission', [RolePermission::class, 'index'])->name('role.permission.list');
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);

    // Dashboard Routes
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Profile Routes
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


    // Users Module
    Route::resource('users', UserController::class);
});

//Auth pages Routs
Route::group(['prefix' => 'auth'], function () {
    Route::get('signin', [HomeController::class, 'signin'])->name('auth.signin');
    Route::get('signup', [HomeController::class, 'signup'])->name('auth.signup');
    Route::get('recoverpw', [HomeController::class, 'recoverpw'])->name('auth.recoverpw');
});

//OPD
Route::group(['prefix' => 'opd'], function () {
    Route::get('list', [OpdController::class, 'index'])->name('listopd');
    Route::get('inputopd', [OpdController::class, 'create'])->name('inputopd');
    Route::post('tambahopd', [OpdController::class, 'store'])->name('tambahopd');
    Route::get('list/{id}/edit', [OpdController::class, 'edit'])->name('editopd');
    Route::put('list/{id}', [OpdController::class, 'update'])->name('updateopd');
    Route::delete('delete/{id}', [OpdController::class, 'destroy'])->name('deleteopd');
});

//UPTD
Route::group(['prefix' => 'uptd'], function () {
    Route::get('list', [UptdController::class, 'index'])->name('listuptd');
    Route::get('inputuptd', [UptdController::class, 'create'])->name('inputuptd');
    Route::post('tambahuptd', [UptdController::class, 'store'])->name('tambahuptd');
    Route::get('list/{id}/edit', [UptdController::class, 'edit'])->name('edituptd');
    Route::put('list/{id}', [UptdController::class, 'update'])->name('updateuptd');
    Route::delete('delete/{id}', [UptdController::class, 'destroy'])->name('deleteuptd');
    Route::get('getuptd', [UptdController::class, 'getuptd'])->name('getuptd');
});

//Site
Route::group(['prefix' => 'sites'], function () {
    Route::get('list', [SiteController::class, 'index'])->name('listsites');
    Route::get('inputsite', [SiteController::class, 'create'])->name('inputsite');
    Route::post('tambahsite', [SiteController::class, 'store'])->name('tambahsite');
    Route::get('list/{id}/edit', [SiteController::class, 'edit'])->name('editsite');
    Route::put('list/{id}', [SiteController::class, 'update'])->name('updatesite');
    Route::delete('delete/{id}', [SiteController::class, 'destroy'])->name('deletesite');
    Route::get('getsite', [SiteController::class, 'getsite'])->name('getsite');
    Route::get('getSiteById/{id}', [SiteController::class, 'getSiteById'])->name('getSiteById');
});

//Monitoring
Route::group(['prefix' => 'monitoring'], function () {
    Route::get('list', [MonitoringController::class, 'index'])->name('listmonitoring');
    Route::get('input', [MonitoringController::class, 'create'])->name('inputmonitoring');
    Route::post('tambahmonitoring', [MonitoringController::class, 'store'])->name('tambahmonitoring');
});

//Validasi
Route::group(['prefix' => 'validasi'], function () {
    Route::get('list', [ValidasiController::class, 'index'])->name('listvalidasi');
    Route::get('inputvalidasi/{id}', [ValidasiController::class, 'create'])->name('inputvalidasi');
    Route::post('tambahvalidasi/{id}', [ValidasiController::class, 'store'])->name('tambahvalidasi');
    // Route::get('list/{id}/edit', [ValidasiController::class, 'edit'])->name('editvalidasi');
    // Route::put('list/{id}', [ValidasiController::class, 'update'])->name('updatevalidasi');
});

//Laporan
Route::group(['prefix' => 'laporan'], function () {
    Route::get('list', [LaporanController::class, 'index'])->name('listlaporan');
    // Route::get('laporan/cetak_pdf', [LaporanController::class, 'cetak_pdf']);
    Route::get('laporan', [LaporanController::class, 'create'])->name('buat_laporan');
});
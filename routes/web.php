<?php

use App\Http\Controllers\Accounts\AcadHead\Dashboard;
use App\Http\Controllers\Accounts\AcadStaff\StaffDashboard;
use App\Http\Controllers\Accounts\Director\DirectorDashboard;
use App\Http\Controllers\Accounts\Faculty\ParttimeFacultyDashboard;
use App\Http\Controllers\Accounts\Faculty\RegularFacultyDashboard;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('accounts.acadhead.dashboard');
// })->middleware(['auth','verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function () {
    Route::get      ('/profile' , [ProfileController::class, 'edit'])       ->name('profile.edit')      ;
    Route::patch    ('/profile' , [ProfileController::class, 'update'])     ->name('profile.update')    ;
    Route::delete   ('/profile' , [ProfileController::class, 'destroy'])    ->name('profile.destroy')   ;
});

Route::middleware('auth','verified')->group(function () {
    Route::get      ('/'        , [Dashboard::class, '_view'])->name('dashboard');
});

Route::middleware('auth','verified')->group(function () {
    Route::get      ('/'        , [StaffDashboard::class, '_view_staff'])->name('dashboard');
});

Route::middleware('auth','verified')->group(function () {
    Route::get      ('/'        , [RegularFacultyDashboard::class, '_view_regular'])->name('dashboard');
});

Route::middleware('auth','verified')->group(function () {
    Route::get      ('/'        , [ParttimeFacultyDashboard::class, '_view_parttime'])->name('dashboard');
});

Route::middleware('auth','verified')->group(function () {
    Route::get      ('/'        , [DirectorDashboard::class, '_view_director'])->name('dashboard');
});
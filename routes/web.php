<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstTimersController;

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
Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('/upload-first-timer', 'upload-first-timer')->name('upload-first-timer');
    Route::view('/upload-successfully','upload-successfully')->name('upload.success');

    Route::resource('all_churches', FirstTimersController::class);
    Route::get('avenor_church', [FirstTimersController::class, 'avenor'])->name('avenor_church');
    Route::get('laa_church', [FirstTimersController::class, 'laa'])->name('laa_church');

});

require __DIR__.'/auth.php';




















// Registration Form
// Route::view('/registration-success','registration-success')->name('registration.success');
// Route::view('/sign-up', 'sign-up')->name('sign-up');

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::resource('informations', \App\Http\Controllers\SonsController::class);
// });


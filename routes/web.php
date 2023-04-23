<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', [ProfileController::class, 'index' ])->name('dashboard');
    Route::group(['prefix'=> 'profile'], function(){
        Route::post('/edit', [ProfileController::class, 'edit' ])->name('profile.edit');  
        Route::post('/kyc', [ProfileController::class, 'kyc' ])->name('profile.kyc');  
    });
    
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

require __DIR__.'/auth.php';

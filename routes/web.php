<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blade\RoleController;
use App\Http\Controllers\Blade\PermissionController;
use App\Http\Controllers\Blade\ApiUserController;

Route::get('/cache', function() {
    $exitCode = \Illuminate\Support\Facades\Artisan::call('cache:clear');
    $exitCode = \Illuminate\Support\Facades\Artisan::call('config:cache');
    return 'DONE'; //Return anything
})->name('cache');


Auth::routes();

// Welcome page
Route::get('/', function (){
    return redirect()->route('home');
})->name('welcome');

Route::group(['middleware'=>'auth'],function (){
    // Home
    Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
});

// Web pages
Route::group(['middleware' => 'auth'],function (){
    // Users
    /*Route::get('/users',[UserController::class,'index'])->name('userIndex');
    Route::get('/user/add',[UserController::class,'add'])->name('userAdd');
    Route::post('/user/create',[UserController::class,'create'])->name('userCreate');
    Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('userEdit');
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('userUpdate');
    Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('userDestroy');*/
    Route::get('/user/theme-set/{id}',[App\Http\Controllers\Blade\UserController::class,'setTheme'])->name('userSetTheme');
    // Permissions

});

// Change language session condition
Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
});

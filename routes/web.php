<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenumonitorController;
use App\Http\Controllers\SDEController;
use App\Http\Controllers\TariffController;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', [ProfileController::class, 'index'])->middleware('auth');



Route::get('/market', [PostController::class, 'index']);
Route::get('market/{post:slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/menumonitor', [MenumonitorController::class, 'index'])->middleware('auth');
Route::get('/monitor', [MonitorController::class, 'index'])->middleware('auth');
Route::get('/sdemanager', [SDEController::class, 'index'])->middleware('auth');

Route::get('/datalog', [ChartController::class, 'index']);

Route::get('/tariff', [TariffController::class, 'index']);

//For adding an image
Route::get('/add-image',[ProfileController::class,'addImage'])->name('images.add');
//For storing an image
Route::post('/store-image',[ProfileController::class,'storeImage'])
->name('images.store');
//For showing an image
Route::get('/view-image',[ProfileController::class,'viewImage'])->name('images.view');
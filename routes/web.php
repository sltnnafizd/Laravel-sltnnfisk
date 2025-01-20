<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;

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
    return view('welcome');
}); 
Route::get('/master', function () {
    return view('template.master');
}); 
 

// Route::get('/1,' [usercontroller::class,'Tugas1']);
// Route::get('/2', [usercontroller::class,'Tugas2']);
// Route::get('/tem/master', [UserController::class,'master']);



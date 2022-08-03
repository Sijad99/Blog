<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/dashboard2', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::resource('dashboard', 'App\Http\Controllers\Admin\AdminController')
    ->middleware(['auth','verified']);

Route::get('dashboard/show/users', 'App\Http\Controllers\Admin\AdminController@users')
    ->middleware(['auth','verified'])->name('dashboard.showUsers');







Route::get('test',function (){

    return Auth::user()->avatar->path;

    return User::find(3)->avatar;



});

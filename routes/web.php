<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestContoroller;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/component-test1', [ComponentTestContoroller::class, 'showComponent1']);
Route::get('/component-test2', [ComponentTestContoroller::class, 'showComponent2']);

require __DIR__ . '/auth.php';

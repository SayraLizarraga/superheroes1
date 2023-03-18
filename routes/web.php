<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\table_herosController;

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
}) -> name ('welcome');

Route::get ('/example', function (){
    $page_title = "example";
    return view ('example', compact('page_title'));
}) -> name ('example');

Route::get ('/heros', [table_herosController:: class, 'index']) -> name ('heros');
Route::get ('/heros_w', [table_herosController:: class, 'index_w']) -> name ('heros_w');
Route::get ('/heros_m', [table_herosController:: class, 'index_m']) -> name ('heros_m');
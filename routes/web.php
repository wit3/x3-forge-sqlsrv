<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('sqlsrv', function () {
    

    $statement = DB::connection('sqlsrv')->statement('select * from [billoo].[Fatture_Testata] ');

    dd($statement);
});



Route::get('users', function () {
    $users = DB::connection('pgsql')->statement('select * from users');
    dd($users);
});
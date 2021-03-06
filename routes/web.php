<?php

use Illuminate\Support\Facades\Route;
use App\Models\Table;

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
    return view('home', [
        'title'         => "Database Management by Dhon Studio",
        'stylesheets'   => ['font-awesome', 'startbootstrap-sb-admin-2'],
        'tables'        => Table::all()
    ]);
});

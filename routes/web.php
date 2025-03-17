<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Redirect the root URL to the contacts index page
Route::get('/', function () {
    return redirect()->route('contacts.index');
});

// Define a resource route for the ContactController
// This automatically sets up standard routes for index, create, store, show, edit, update, and destroy actions
Route::resource('contacts', ContactController::class);

<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/form', 'App\Http\Controllers\PageController@form')->name('form');

Auth::routes();

Route::group([
    'prefix' => 'backend',
    'middleware' => ['auth'],
    'namespace' => 'App\Http\Controllers\Backend'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::post('/', 'DashboardController@index')->name('dashboard');
    Route::resource('groups', 'GroupController');
    Route::resource('profile', 'ProfileController');
    Route::resource('students', 'StudentController');
    Route::resource('users', 'UserController');
});

Route::post('/student_store', 'App\Http\Controllers\Controller@student_store')->name('student_store');
Route::get('/thank', function () {
    return view('thank');
})->name('thank');

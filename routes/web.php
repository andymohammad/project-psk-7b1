<?php

//use Illuminate\Routing\Route;

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
    return view('auth.login');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');

Route::get('logout', 'AuthController@logout')->middleware('auth','checkRole:admin,mahasiswa');
Route::get('/dashboard', 'AdminController@dashboard')->middleware('auth','checkRole:admin,mahasiswa');
Route::get('/profile', 'UserController@profile');
Route::post('profile', 'UserController@uploadfoto');
//Route::get('/dashboard/{id}/detail', 'MahasiswaController')->middleware('auth', 'checkRole:admin,mahasiswa,dosen');
Auth::routes();


//user route
//Route::get('users/{user}',  ['as' => 'user.edit', 'uses' => 'UserController@edit']);
//Route::patch('user/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('/datamhs', 'MahasiswaController@datamhs')->middleware('auth','checkRole:admin');
Route::post('/datamhs/create', 'MahasiswaController@create')->middleware('auth');
Route::get('/datamhs/{id}/edit', 'MahasiswaController@edit')->middleware('auth');
Route::post('/datamhs/{id}/update', 'MahasiswaController@update')->middleware('auth');
Route::get('/datamhs/{id}/delete', 'MahasiswaController@delete')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

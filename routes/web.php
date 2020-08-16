<?php

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

Route::get('/', 'MainController@index')->name('home');


// Games Routes
Route::get('/games', 'GamesController@index')->name('games');
Route::get('/game/{id}', 'GamesController@game')->name('game');

// Tournaments Route
Route::get('/tournaments', 'TournamentsController@index')->name('tournaments');
Route::get('/tournament/result/{id}', 'TournamentsController@result')->name('tournament_results');
Route::get('/tournament/register/{id}', 'TournamentsController@showRegister')->name('show_tr_register');
Route::post('/tournament/register', 'TournamentsController@register')->name('tr_register');

// User Profile Route
Route::get('/user/show/{username}', 'ProfileController@index')->name('user_profile');

// Profile Route
Route::get('/profile', 'HomeController@index')->name('profile');
  // Profile teams Route
  Route::get('/team/create', 'TeamsController@showCreate')->name('create_team');
  Route::post('/team/create', 'TeamsController@create')->name('add_team');
  Route::get('/team/manage', 'TeamsController@showManage')->name('manage_team');
  Route::get('/team/manage/disbale/{id}', 'TeamsController@disableTeam')->name('delete_team');
  Route::get('/team/manage/enable/{id}', 'TeamsController@enableTeam')->name('undelete_team');
  Route::get('/team/manage/edit/{id}', 'TeamsController@showEdit')->name('edit_team');
  // Profile tournaments Route
  Route::get('/mytournaments', 'TournamentsController@myTournaments')->name('my_tournaments');

// Team Route
Route::get('/team/show/{tag}', 'TeamsController@index')->name('team_profile');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Filter Cities base on selected State
Route::get('/city/{id}','Auth\RegisterController@getcities');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::group(['prefix' => 'help'] , function() {
    Route::get('/{drm}' , 'HelpController@drm');
});

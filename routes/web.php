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

// Admin Route
Route::group(['prefix' => 'admin'] , function() {
    Route::get('/', function () {
      if (Auth::guard('admins')->user()) {
        return redirect('admin/panel');
      } else {
        return redirect('admin/login');
      }
    });
    Route::get('/login' , 'AdminController@showLogin')->name('admin_show_login');
    Route::post('/login' , 'AdminController@login')->name('admin_login');
    Route::post('/logout' , 'AdminController@logout')->name('admin_logout');
    Route::get('/panel' , 'AdminController@index')->name('admin_panel');
    Route::get('/settings' , 'AdminController@showSetting')->name('admin_settings');
    Route::post('/settings' , 'AdminController@updateSetting')->name('admin_settings_update');
    // Users
    Route::group(['prefix' => 'users'] , function() {
        Route::get('/' , 'AdminController@showUsers')->name('admin_users');
        Route::get('/add' , 'AdminController@showAddUser')->name('admin_user_add');
        Route::post('/add' , 'AdminController@addUser')->name('admin_user_save');
        Route::get('/search' , 'AdminController@searchUser')->name('admin_users_search');
        Route::get('/edit/{id}' , 'AdminController@showEditUser')->name('admin_user_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditUser')->name('admin_user_edit_save');
    });
    // Games
    Route::group(['prefix' => 'games'] , function() {
        Route::get('/' , 'AdminController@showGames')->name('admin_games');
        Route::get('/add' , 'AdminController@showAddGame')->name('admin_game_add');
        Route::post('/add' , 'AdminController@saveAddGame')->name('admin_game_add_save');
        Route::get('/edit/{id}' , 'AdminController@showEditGame')->name('admin_game_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditGame')->name('admin_game_edit_save');
        Route::get('/toggleStatus/{id}' , 'AdminController@toggleGameStatus')->name('admin_game_toggle_status');
    });
    // Tournaments
    Route::group(['prefix' => 'tournaments'] , function() {
        Route::get('/' , 'AdminController@showTournaments')->name('admin_tournaments');
        Route::get('/add' , 'AdminController@showAddTournament')->name('admin_tournament_add');
        Route::post('/add' , 'AdminController@saveAddTournament')->name('admin_tournament_add_save');
        Route::get('/search' , 'AdminController@searchTournament')->name('admin_tournament_search');
        Route::get('/edit/{id}' , 'AdminController@showEditTournament')->name('admin_tournament_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditTournament')->name('admin_tournament_edit_save');
        Route::get('/toggleStatus/{id}' , 'AdminController@toggleTournamentStatus')->name('admin_tournament_toggle_status');
        Route::get('/endregister/{id}' , 'AdminController@endTournamentRegister')->name('admin_tournament_end_register');
    });
    // Teams
    Route::group(['prefix' => 'teams'] , function() {
        Route::get('/' , 'AdminController@showTeams')->name('admin_teams');
        Route::get('/search' , 'AdminController@searchTeam')->name('admin_team_search');
        Route::get('/edit/{id}' , 'AdminController@showEditTeam')->name('admin_team_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditTeam')->name('admin_team_edit_save');
        Route::get('/toggleStatus/{id}' , 'AdminController@toggleTeamStatus')->name('admin_team_toggle_status');
    });
});

// Games Routes
Route::get('/games', 'GamesController@index')->name('games');
Route::get('/game/{id}', 'GamesController@game')->name('game');

// Tournaments Route
Route::group(['prefix' => 'tournament'] , function() {
    Route::get('/', 'TournamentsController@index')->name('tournaments');
    Route::get('/result/{id}', 'TournamentsController@result')->name('tournament_results');
    Route::get('/register/{id}', 'TournamentsController@showRegister')->name('show_tr_register');
    Route::post('/register', 'TournamentsController@register')->name('tr_register');
});

// User Route
Route::get('/user/show/{username}', 'UserController@index')->name('user_profile');
  // Profile Route
  Route::group(['prefix' => 'profile'] , function() {
      Route::get('/', 'HomeController@index')->name('profile');
      Route::get('/edit', 'ProfileController@edit')->name('edit_profile');
      Route::post('/edit', 'ProfileController@save')->name('save_edit');
  });

  // Team Route
  Route::group(['prefix' => 'team'] , function() {
      Route::get('/show/{tag}', 'TeamsController@index')->name('team_profile');
      Route::get('/create', 'TeamsController@showCreate')->name('create_team');
      Route::post('/create', 'TeamsController@create')->name('add_team');
      Route::get('/manage', 'TeamsController@showManage')->name('manage_team');
      Route::get('/manage/disbale/{id}', 'TeamsController@disableTeam')->name('delete_team');
      Route::get('/manage/enable/{id}', 'TeamsController@enableTeam')->name('undelete_team');
      Route::get('/manage/edit/{id}', 'TeamsController@showEdit')->name('edit_team');
  });
  // Profile tournaments Route
  Route::get('/mytournaments', 'TournamentsController@myTournaments')->name('my_tournaments');


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

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
Route::get('/errorPage/{code}', 'HomeController@errorPage')->name('errorPage');
Route::get('/t/rules', 'HomeController@tournamentRules')->name('trules');
Route::get('/rules', 'HomeController@rules')->name('rules');

// Email Verification
Auth::routes(['verify' => true]);
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
    Route::get('/panel' , 'AdminController@index')->name('admin_panel')->middleware('admin');
    Route::get('/settings' , 'AdminController@showSetting')->name('admin_settings')->middleware('admin');
    Route::post('/settings' , 'AdminController@updateSetting')->name('admin_settings_update')->middleware('admin');

    // Tickets
    Route::group(['prefix' => 'tickets', 'middleware' => 'admin'] , function() {
      Route::get('/' , 'Admin\TicketController@index')->name('admin_tickets');
      Route::get('/search' , 'Admin\TicketController@search')->name('admin_tickets_search');
      Route::get('/ended' , 'Admin\TicketController@ended')->name('admin_tickets_ended');
      Route::get('/create', 'Admin\TicketController@showCreate')->name('admin_tickets_show_create');
      Route::post('/create', 'Admin\TicketController@saveCreate')->name('admin_tickets_save_create');
      Route::get('/t/{id}' , 'Admin\TicketController@showTicket')->name('admin_ticket_show');
      Route::post('/t/{id}/comment', 'Admin\TicketController@newComment')->name('admin_ticket_new_comment');
      Route::get('/p/{id}' , 'Admin\TicketController@setInProgress')->name('admin_ticket_progress');
      Route::get('/c/{id}' , 'Admin\TicketController@closeTicket')->name('admin_ticket_close');
    });
    // Users
    Route::group(['prefix' => 'users', 'middleware' => 'admin'] , function() {
        Route::get('/' , 'AdminController@showUsers')->name('admin_users');
        Route::get('/add' , 'AdminController@showAddUser')->name('admin_user_add');
        Route::post('/add' , 'AdminController@addUser')->name('admin_user_save');
        Route::get('/search' , 'AdminController@searchUser')->name('admin_users_search');
        Route::get('/edit/{id}' , 'AdminController@showEditUser')->name('admin_user_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditUser')->name('admin_user_edit_save');
        Route::get('/disable/{id}' , 'AdminController@disbaleUserShow')->name('admin_user_disable');
        Route::post('/disable/{id}' , 'AdminController@disableUserSave')->name('admin_user_disable_save');
        Route::get('/verify/{id}' , 'AdminController@verifyUser')->name('admin_verify_user');
    });
    // Games
    Route::group(['prefix' => 'games', 'middleware' => 'admin'] , function() {
        Route::get('/' , 'AdminController@showGames')->name('admin_games');
        Route::get('/add' , 'AdminController@showAddGame')->name('admin_game_add');
        Route::post('/add' , 'AdminController@saveAddGame')->name('admin_game_add_save');
        Route::get('/edit/{id}' , 'AdminController@showEditGame')->name('admin_game_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditGame')->name('admin_game_edit_save');
        Route::get('/toggleStatus/{id}' , 'AdminController@toggleGameStatus')->name('admin_game_toggle_status');
    });
    // Tournaments
    Route::group(['prefix' => 'tournaments', 'middleware' => 'admin'] , function() {
        Route::get('/' , 'AdminController@showTournaments')->name('admin_tournaments');
        Route::get('/add' , 'AdminController@showAddTournament')->name('admin_tournament_add');
        Route::post('/add' , 'AdminController@saveAddTournament')->name('admin_tournament_add_save');
        Route::get('/search' , 'AdminController@searchTournament')->name('admin_tournament_search');
        Route::get('/edit/{id}' , 'AdminController@showEditTournament')->name('admin_tournament_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditTournament')->name('admin_tournament_edit_save');
        Route::get('/toggleStatus/{id}' , 'AdminController@toggleTournamentStatus')->name('admin_tournament_toggle_status');
        Route::get('/endregister/{id}' , 'AdminController@endTournamentRegister')->name('admin_tournament_end_register');
        Route::get('/registers/{id}' , 'AdminController@showRegister')->name('admin_tournament_register');
        Route::get('/registers/{id}/search' , 'AdminController@searchTournamentRegister')->name('admin_tournament_register_search');
        Route::get('/result' , 'AdminController@tournamentResultShow')->name('admin_tournament_result');
        Route::post('/result' , 'AdminController@tournamentResultAdd')->name('admin_tournament_result_add');
        Route::get('/start/{id}' , 'AdminController@startTournament')->name('admin_tournament_start');
    });
    // Teams
    Route::group(['prefix' => 'teams', 'middleware' => 'admin'] , function() {
        Route::get('/' , 'AdminController@showTeams')->name('admin_teams');
        Route::get('/search' , 'AdminController@searchTeam')->name('admin_team_search');
        Route::get('/edit/{id}' , 'AdminController@showEditTeam')->name('admin_team_edit');
        Route::post('/edit/{id}' , 'AdminController@saveEditTeam')->name('admin_team_edit_save');
        Route::get('/disable/{id}' , 'AdminController@disbaleTeamShow')->name('admin_team_disable');
        Route::post('/disable/{id}' , 'AdminController@disableTeamSave')->name('admin_team_disable_save');
    });
});

// Games Routes
Route::get('/games', 'GamesController@index')->name('games');
Route::get('/game/{id}', 'GamesController@game')->name('game');

// Tournaments Route
Route::group(['prefix' => 'tournament'] , function() {
    Route::get('/', 'TournamentsController@index')->name('tournaments');
    Route::get('/active', 'TournamentsController@showActive')->name('tournaments_active');
    Route::get('/end', 'TournamentsController@showEnd')->name('tournaments_end');
    Route::get('/soon', 'TournamentsController@showSoon')->name('tournaments_soon');
    Route::get('/progress', 'TournamentsController@showProg')->name('tournaments_progress');
    Route::get('/result/{id}', 'TournamentsController@result')->name('tournament_results');
    Route::get('/register/{id}', 'TournamentsController@showRegister')->name('show_tr_register')->middleware('auth')->middleware('verified');
    Route::post('/register', 'TournamentsController@register')->name('tr_register')->middleware('auth')->middleware('verified');
});

// User Route
Route::get('/user/show/{username}', 'UserController@index')->name('user_profile');
Route::get('/user/addfriend/{id}', 'UserController@addFriend')->name('user_add_friend')->middleware('auth')->middleware('verified');
Route::get('/user/rfriendRequest/{sender}-{receiver}', 'UserController@removeAddFriend')->name('user_remove_add_friend')->middleware('auth')->middleware('verified');
Route::get('/users', 'UserController@showAll')->name('users_list');

// Team Profile
Route::get('/team/show/{tag}', 'TeamsController@index')->name('team_profile');

  // Profile Route
  Route::group(['prefix' => 'profile', 'middleware' => 'auth'] , function() {
      Route::get('/', 'HomeController@index')->name('profile');
      Route::group(['prefix' => 'friends'] , function() {
        Route::get('/', 'HomeController@myFriends')->name('my_friends');
        Route::get('/requests', 'HomeController@friendRequests')->name('friend_requests');
        Route::get('/requests/{result}/{sender}-{receiver}', 'HomeController@friendResult')->name('friend_requests_result');
        Route::get('/remove/{id}', 'HomeController@removeFriend')->name('remove_friend');
      });
      Route::get('/edit', 'ProfileController@edit')->name('edit_profile');
      Route::post('/edit', 'ProfileController@save')->name('save_edit');
      Route::get('/privacy', 'ProfileController@privacyShow')->name('show_privacy');
      Route::post('/privacy', 'ProfileController@privacySave')->name('save_privacy');

      // Team Route
      Route::group(['prefix' => 'team', 'middleware' => 'verified'] , function() {
          Route::get('/myteams', 'TeamsController@myTeams')->name('my_team');
          Route::get('/create', 'TeamsController@showCreate')->name('create_team');
          Route::post('/create', 'TeamsController@create')->name('add_team');
          Route::get('/manage', 'TeamsController@showManage')->name('manage_team');
          Route::get('/manage/disbale/{id}', 'TeamsController@disableTeam')->name('delete_team');
          Route::get('/manage/enable/{id}', 'TeamsController@enableTeam')->name('undelete_team');
          Route::get('/manage/edit/{id}', 'TeamsController@showEdit')->name('edit_team');
          Route::post('/manage/edit', 'TeamsController@saveEdit')->name('save_team');
          Route::get('/joinRequests', 'TeamsController@showJoins')->name('show_join');
          Route::get('/joinRequests/{result}/{team}-{user}', 'TeamsController@resultJoin')->name('result_join');
      });

      // Profile tournaments Route
      Route::get('/mytournaments', 'TournamentsController@myTournaments')->name('my_tournaments')->middleware('auth');

      // Support System
      Route::group(['prefix' => 'ticket'] , function() {
        Route::get('/', 'SupportsController@index')->name('support');
        Route::get('/create', 'SupportsController@showCreate')->name('support_show_create');
        Route::post('/create', 'SupportsController@saveCreate')->name('support_save_create');
        Route::get('/t/{id}', 'SupportsController@showTicket')->name('support_show');
        Route::post('/t/{id}/comment', 'SupportsController@newComment')->name('support_new_comment');
        Route::get('/c/{id}', 'SupportsController@closeTicket')->name('support_close');
      });

  });


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Filter Cities base on selected State
Route::get('/city/{id}','Auth\RegisterController@getcities');
Route::get('/cities/{id}','UserController@getcities');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
// Route::get('', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::group(['prefix' => 'help'] , function() {
    Route::get('/{drm}' , 'HelpController@index');
});

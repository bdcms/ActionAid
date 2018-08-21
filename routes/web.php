<?php

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



//login Controller
Route::get('/','LoginController@index');
Route::post('/checkAuth','LoginController@checkAuth');
Route::get('/logout','LoginController@logout');



//Admin panel
Route::get('/AdminDashboard','AdminController@AdminDashboard');

//Country Director panel
Route::get('/CountryDashboard','CountryController@CountryDashboard');

//HROD panel
Route::get('/HrodDashboard','HrodController@HrodDashboard');

//HOFSP panel
Route::get('/HofspDashboard','HofspController@HofspDashboard');

//Hub Coordinator  panel
Route::get('/HubDashboard','HubController@HubDashboard');

//Programe Officer panel
Route::get('/ProgramDashboard','ProgramController@ProgramDashboard');

//Line Manager panel
Route::get('/LineDashboard','LineController@LineDashboard');

//Project Coordinator panel
Route::get('/ProjectDashboard','ProjectController@ProjectDashboard');

//Regional MEL panel
Route::get('/MelDashboard','MelController@MelDashboard');

//Finance Officer  panel
Route::get('/FinanceDashboard','FinanceController@FinanceDashboard');
 


//Profile controller
Route::get('/getProfile','ProfileController@getProfile');
Route::post('/updateProfile','ProfileController@updateProfile');








// Alll of Activities Routing link start
Route::get('/AllActivities','AdminController@activities_list');
// Alll of Activities Routing link exit


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

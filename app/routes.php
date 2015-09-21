<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# SITE ROUTES
Route::get('/', 'HomeController@index');
Route::get('/team-roster', 'HomeController@roster');
Route::get('/historia', 'HomeController@teamHistory');
Route::get('/mascotas', 'HomeController@mascots');
Route::get('/estadio', 'HomeController@stadium');
Route::get('/quienes-somos', 'HomeController@aboutUs');
Route::get('/organigrama', 'HomeController@organizationChart');
Route::get('/contacto', 'HomeController@contacto');
Route::get('/calendario-2015', 'HomeController@seasonSchedule');
Route::get('/playoffs-2015', 'HomeController@playoffsSchedule');
Route::get('/compra-boletos', 'HomeController@seasonTickets');
Route::get('/estadisticas/primera-vuelta', 'HomeController@firstRoundStatistics');
Route::get('/estadisticas/segunda-vuelta', 'HomeController@firstRoundStatistics');
Route::get('/estadisticas/playoffs', 'HomeController@playoffsStatistics');
Route::get('/estadisticas/individuales', 'HomeController@personalStatistics');
Route::get('/prensa', 'HomeController@news');
Route::get('/opinion', 'HomeController@opinion'); 
Route::get('/boletin', 'HomeController@boletin'); 

# WEBSERVICE ROUTES
Route::get('/news', 'JsonController@getNews');
Route::get('/opinions', 'JsonController@getOpinions');
Route::get('/roster', 'JsonController@getRoster');
Route::get('/games', 'JsonController@getSchedule');
Route::get('/zone-price', 'JsonController@getStadiumZonePrice');

# N15 CONNECTIONS ROUTES
Route::get('/service', 'JsonController@service');	

# CMS ROUTES
Route::get('/login', 'LoginController@index'); 
Route::post('/login/logon', 'LoginController@login');
Route::get('/logout',function(){
	Auth::logout();

	return Redirect::to('/login');
});
Route::get('/admin', 'LoginController@adminHome')->before('Auth');
Route::get('/admin-home', array('before'=>'auth', 'uses'=>'LoginController@adminHome'));
# CMS NEWS ROUTES
Route::get('/admin/news', array('before'=>'auth', 'uses'=>'NewsController@index'));
Route::get('/admin/news/create', 'NewsController@create');
Route::post('/admin/news/save', 'NewsController@save');
Route::get('/admin/news/show/{id}', 'NewsController@show');
Route::get('/admin/news/edit/{id}', 'NewsController@edit');
Route::post('/admin/news/update', 'NewsController@update');
Route::get('/admin/news/delete/{id}', 'NewsController@delete');
# CMS OPINIONS ROUTES
Route::get('/admin/opinions', array('before'=>'auth', 'uses'=>'NewsController@opinions'));
Route::get('/admin/opinions/create', 'NewsController@createOpinion');
Route::post('/admin/opinions/save', 'NewsController@saveOpinion');
Route::get('/admin/opinions/show/{id}', 'NewsController@showOpinion');
Route::get('/admin/opinions/edit/{id}', 'NewsController@editOpinion');
Route::post('/admin/opinions/update', 'NewsController@updateOpinion');
Route::get('/admin/opinions/delete/{id}', 'NewsController@deleteOpinion');
# CMS ROSTER ROUTES
Route::get('/admin/roster', array('before'=>'auth', 'uses'=>'RosterController@index'));
Route::get('/admin/roster/create', 'RosterController@create');
Route::post('/admin/roster/save', 'RosterController@save');
Route::get('/admin/roster/show/{id}', 'RosterController@show');
Route::get('/admin/roster/edit/{id}', 'RosterController@edit');
Route::post('/admin/roster/update', 'RosterController@update');
Route::get('/admin/roster/delete/{id}', 'RosterController@delete');
# CMS SCHEDULE GAMES ROUTES
Route::get('/admin/schedule', array('before'=>'auth', 'uses'=>'ScheduleController@index'));
Route::get('/admin/schedule/create', 'ScheduleController@create');
Route::post('/admin/schedule/save', 'ScheduleController@save');
Route::get('/admin/schedule/show/{id}', 'ScheduleController@show');
Route::get('/admin/schedule/edit/{id}', 'ScheduleController@edit');
Route::post('/admin/schedule/update', 'ScheduleController@update');
Route::get('/admin/schedule/delete/{id}', 'ScheduleController@delete');
# CMS STADIUM ROUTES
Route::get('/admin/stadium', array('before'=>'auth', 'uses'=>'StadiumsController@index'));
Route::get('/admin/stadium/edit-zoneprice/{id}', 'HomeController@editZonePrice');
Route::get('/admin/stadium/delete-zoneprice/{id}', 'HomeController@deleteZonePrice');

# CATCH ALL THE MISSING ROUTES
App::missing(function($exception)
{
	return Redirect::to('/');
});
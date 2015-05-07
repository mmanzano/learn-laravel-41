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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/candidates/{slug}/{id}',['as' => 'category', 'uses' => 'CandidatesController@category']);

Route::get('{slug}/{id}',['as' => 'candidate', 'uses' => 'CandidatesController@show']);

// Rutas usuario anónimo
Route::group(['before' => 'guest'], function(){
    Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'UsersController@signUp']);

    Route::post('register', ['as' => 'register', 'uses' => 'UsersController@register']);

    Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
});

// Rutas usuario logueado
Route::group(['before' => 'auth'], function (){

    require(__DIR__ . '/routes/auth.php');

    Route::group(['before' => 'is_admin'], function(){

        require(__DIR__ . '/routes/admin.php');

    });
});



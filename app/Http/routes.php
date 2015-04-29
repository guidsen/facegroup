<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->group(['namespace' => 'App\Http\Controllers'], function ($group) {
    $group->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    $group->get('auth', ['as' => 'auth', 'uses' => 'HomeController@auth']);
    $group->get('logout', ['as' => 'logout', 'uses' => 'HomeController@logout']);

    $group->get('group/{id}', ['as' => 'group.show', 'uses' => 'GroupController@show']);
    $group->get('message/{id}', ['as' => 'message.show', 'uses' => 'MessageController@show']);
});
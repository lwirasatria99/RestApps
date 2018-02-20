<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('createuser', 'UserController@create');
$router->post('userlogin', 'UserController@login');
$router->get('getquestion/{user_id}', 'UserController@getQuestions');

$router->post('createcategory', 'CategoryController@create');

$router->post('createquestion', 'QuestionController@create');

$router->post('submit', 'AnswerController@submit');

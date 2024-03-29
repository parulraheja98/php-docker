<?php
use App\upstreamcheck;

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

$router->get('/api/start', function () {
    // this is a api endpoint demo, you should create a controller for your endpoint
    return [
        'message' => 'All requests with api prefix will go to backend'
    ];
});

$router->get('/api/players' , 'PlayerController@listAllPlayers');

$router->get('api/players/{id}' , 'PlayerController@playerById');

$router->get('/api/players/del/{id}' , 'PlayerController@delPlayerById');

$router->post('/api/players/add','PlayerController@addPlayer');
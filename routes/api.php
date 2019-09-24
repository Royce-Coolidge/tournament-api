<?php

use Illuminate\Http\Request;

$router->group(["prefix" => "players"], function($router){

    $router->post("", "Players@store"); // when the user makes a POST request to the URL /players call the store method of the Players controller
    $router->get("", "Players@index"); // want to give back a JSON array of all the players that have been added to the database
    $router->get("{player}", "Players@show"); // show a specific acticle
    $router->put("{player}", "Players@update"); // edits a player
    $router->delete("{player}", "Players@destroy"); // deletes a player

});






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

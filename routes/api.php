<?php

use Illuminate\Http\Request;



$router->post("players", "Players@store"); // when the user makes a POST request to the URL /players call the store method of the Players controller

$router->get("players", "Players@index"); // want to give back a JSON array of all the players that have been added to the database


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

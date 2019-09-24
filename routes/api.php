<?php

use Illuminate\Http\Request;


// when the user makes a POST request to the URL /players
// call the store method of the Players controller
$router->post("players", "Players@store");
$router->get("players", )


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

namespace App\Http\Controllers;
use App\Player;
use App\Http\Resources\PlayerResource;
use App\Http\Requests\PlayerRequest;

use Illuminate\Http\Request;

class Players extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PlayerResource::collection(Player::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerRequest $request) // Request object represents the request the user made
    {
        
        $data = $request->all(); // returns an array of the data the user submitted

        return Player::create($data); // create method from Player class takes the array and creates a new object instance of the model
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        return Player::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerRequest $request, $id)
    {
        $player = Player::find($id); // find the player with the given id
        $data = $request->all(); // returns an array of the data the user submitted

        $player->fill($data)->save(); // updates the player using the fill method and then saves it to the db
        return $player; // return updated version of player
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player= Player::find($id); // find the player object with the given id

        $player->delete();

        return reponse(null, 204); // return 204 code as there is no content in the repsonse    
    }
}

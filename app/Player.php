<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ["player_name"];

   
    
}


Player::create(); // Create a player  in player table
Player::get(); // gets all players in the player table

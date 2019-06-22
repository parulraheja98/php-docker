<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\upstreamcheck;
use App\player;

class PlayerController extends Controller 

{

    public function listAllPlayers() {
        $messages = player::all();
        return $messages;
    }

    public function playerById($check) {
        $user = player::find($check);
        return $user;
    }

    public function delPlayerById($id) {
        $user = player::find($id);
        $user->delete();
        return [
            'message' => 'User successfully deleted'
        ];
    }

    public function addPlayer(Request $request) {
        $player = new player;
        $player->name = $request->input('name');
        $player->height = $request->input('height');
        $player->weight = $request->input('weight');
        $player->country = $request->input('country');
        $player->save();
        return [
            'message' => 'Player Information Saved '
        ];


    }




}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    /**
     * Display all players
     */
    public function index()
    {
        return Player::orderBy('id', 'ASC')->get();
    }

    /**
     * Display all players that play in a certain position
     */
    public function position($position)
    {
        $players = Player::where('position', '=', $position)->get();

        if ($players) {
            return $players;
        }
        return "No players found";
    }

    /**
     * Display all players that play forward randomly
     */
    public function randomForwards()
    {
        $forwards = Player::where('position', '=', 'Forward')->inRandomOrder()->get();

        if ($forwards) {
            return $forwards;
        }
        return "No players found";
    }

    /**
     * Display all players that play back randomly
     */
    public function randomDefenders()
    {
        $defenders = Player::where('position', '=', 'Defender')->inRandomOrder()->get();

        if ($defenders) {
            return $defenders;
        }
        return "No players found";
    }

    /**
     * Display all players that play back randomly
     */
    public function randomMidfielders()
    {
        $midfielders = Player::where('position', '=', 'Midfielder')->inRandomOrder()->get();

        if ($midfielders) {
            return $midfielders;
        }
        return "No players found";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPlayer = new Player;
        $newPlayer->name = $request["name"];
        $newPlayer->originalClub = $request["originalClub"];
        $newPlayer->position = $request["position"];
        $newPlayer->averageDisposals = $request["averageDisposals"];
        $newPlayer->averageMarks = $request["averageMarks"];
        $newPlayer->goals = $request["goals"];
        $newPlayer->points = $request["behinds"];
        $newPlayer->allAustralian = $request["allAustralian"];
        $newPlayer->save();

        return $newPlayer;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingPlayer = Player::find($id);

        if ($existingPlayer) {
            $existingPlayer->name = $request['name'];
            $existingPlayer->position = $request['position'];
            $existingPlayer->originalclub = $request['originalClub'];
            $existingPlayer->averageDisposals = $request['averageDisposals'];
            $existingPlayer->averageMarks = $request['averageMarks'];
            $existingPlayer->goals = $request['goals'];
            $existingPlayer->points = $request['behinds'];
            $existingPlayer->allAustralian = $request['allAustralian'];
            $existingPlayer->save();
            return $existingPlayer;
        }
        return "No player found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingPlayer = Player::find($id);

        if ($existingPlayer) {
            $existingPlayer->delete();
            return "Player deleted";
        }
        return "No player found";
    }
}

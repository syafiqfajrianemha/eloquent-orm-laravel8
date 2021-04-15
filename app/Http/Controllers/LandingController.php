<?php

namespace App\Http\Controllers;

use App\Models\Clubs;
use App\Models\Managers;
use App\Models\Players;
use App\Models\Stadiums;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.landing-page.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Custom
    public function clubs()
    {
        $clubs = Clubs::orderBy('thropy', 'desc')->get();

        return view('pages.landing-page.clubs', ['clubs' => $clubs]);
    }

    public function players()
    {
        $players = Players::all();

        return view('pages.landing-page.players', compact('players'));
    }

    public function managers()
    {
        $managers = Managers::all();

        return view('pages.landing-page.managers', compact('managers'));
    }

    public function stadiums()
    {
        $stadiums = Stadiums::all();

        return view('pages.landing-page.stadiums', compact('stadiums'));
    }
}

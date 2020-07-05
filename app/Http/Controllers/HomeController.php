<?php

namespace App\Http\Controllers;
use App\Point;
use App\Fixture;
use App\Team;
use App\Player;
use DB;
use Redirect;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fixtureCount = Fixture::count();
        $playerCount = Player::count();
        $teamCount = Team::count();
        
        $data['fixtures'] = DB::table('fixtures')
        ->join('teams', 'teams.id', '=', 'fixtures.teamOne')
        ->join('teams as t', 't.id', '=', 'fixtures.teamTwo')
        ->select('fixtures.*', 'teams.name as team1','teams.logo as logo1','t.name as team2','t.logo as logo2')
        ->where('fixtures.fixture', '>' , date('Y-m-d').' 00:00:00')
        ->get()->toArray();
        
        return view('home',$data,compact('fixtureCount','playerCount','teamCount'));
    }

}

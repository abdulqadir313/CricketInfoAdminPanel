<?php

namespace App\Http\Controllers;
use App\Player;
use Illuminate\Http\Request;
use App\Team;
use DB;
use Redirect;
class PlayerController extends Controller
{
    public function index()
    {
        $data['players'] = DB::table('players')
        ->join('teams', 'teams.id', '=', 'players.teamId')
        ->select('players.*', 'teams.name')
        ->get()->toArray();    	
        $playersCount = Player::count();
        //print_r($teamCount);
        return view('players',$data,compact('playersCount'));
    }
    
    public function add()
    {
        $data['teams'] = Team::all();
        return view('add-player',$data);
    }
    
    public function store(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //print_r($request);
        if ($files = $request->file('photo')) {
           $destinationPath = 'public/img/'; // upload path
           $Image = time() . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $Image);
           $insert['photo'] = "$Image";
        }
         
        $insert['firstName'] = $request->get('firstName');
        $insert['lastName'] = $request->get('lastName');
        $insert['country'] = $request->get('country');
        $insert['jersyNumber'] = $request->get('jersyNumber');
        $insert['matches'] = $request->get('matches');
        $insert['run'] = $request->get('runs');
        $insert['highestScore'] = $request->get('highestScore');
        $insert['fifties'] = $request->get('fifties');
        $insert['hundreds'] = $request->get('hundreds');
        $insert['average'] = $request->get('average');
        $insert['strikeRate'] = $request->get('strikeRate');
        $insert['teamId'] = $request->get('team');
        $t = Player::create($insert);
        //print_r($t);
        
        return Redirect::to('players')->with('success','Greate! Team created successfully.');
    }
}

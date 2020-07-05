<?php
namespace App\Http\Controllers;
use App\Fixture;
use Illuminate\Http\Request;
use App\Team;
use App\Point;
use DB;
use Redirect;
class FixtureController extends Controller
{
    public function index()
    {
        $data['fixtures'] = DB::table('fixtures')
        ->join('teams', 'teams.id', '=', 'fixtures.teamOne')
        ->join('teams as t', 't.id', '=', 'fixtures.teamTwo')
        ->select('fixtures.*', 'teams.name as team1','teams.logo as logo1','t.name as team2','t.logo as logo2')
        ->get()->toArray();    	
        $fixtureCount = Fixture::count();
        //print_r($data);
        return view('fixtures',$data,compact('fixtureCount'));
    }
    
    
    public function add()
    {
        $data['teams'] = Team::all();
        //print_r($data);
        return view('add-fixture',$data);
    }
    
    
    public function store(Request $request){
        $request->validate([
            'teamOne' => 'required',
            'teamTwo' => 'required',
            'venue' => 'required',
            'fixture' => 'required',
            
        ]);
        $insert['teamOne'] = $request->get('teamOne');
        $insert['teamTwo'] = $request->get('teamTwo');
        $insert['venue'] = $request->get('venue');
        $insert['fixture'] = $request->get('fixture');
        $t = Fixture::create($insert);
        //print_r($t);
        
        return Redirect::to('fixtures')->with('success','Greate! Fixture created successfully.');
    }
    
    
    public function edit($id)
    {
        $data['fixture'] = DB::table('fixtures')
        ->join('teams', 'teams.id', '=', 'fixtures.teamOne')
        ->join('teams as t', 't.id', '=', 'fixtures.teamTwo')
        ->select('fixtures.*', 'teams.name as team1','teams.logo as logo1','t.name as team2','t.logo as logo2','t.id as team2Id','teams.id as team1Id')
        ->where('fixtures.id', '=',$id)
        ->get()->toArray();
       // print_r($data);
        return view('edit-fixture',$data);
    }
    
    
    
}

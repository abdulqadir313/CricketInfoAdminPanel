<?php

namespace App\Http\Controllers;
use App\Team;
use App\Player;
use Illuminate\Http\Request;
use Redirect;
use DB;
class TeamController extends Controller
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
        $data['teams'] = Team::orderBy('name','asc')->paginate(10);
        $teamCount = Team::count();
        //print_r($teamCount);
        return view('teams',$data,compact('teamCount'));
    }
    public function details($id){
        //print_r($id);
        $data['players'] = DB::table('players')
        ->join('teams', 'teams.id', '=', 'players.teamId')
        ->select('players.*', 'teams.name')
        ->where('players.teamId', '=', $id)
        ->get()->toArray();    	
        $playersCount = Player::where('teamId',$id)->count();
        $teamName = Team::where('id',$id)->get();
        //print_r($teamName);
        return view('teamplayers',$data,compact('playersCount','teamName'));
    }
    public function count()
    {
        $teamCount = Team::count();
        //print_r($teamCount);
        return view('teams',compact('teamCount'));
    }
    
    
    public function add()
    {
        return view('add-team');
    }
    
    
    public function edit($id)
    {
        //print_r($id);
        $team = DB::select('SELECT * from teams WHERE id='.$id);
        //print_r($team);
        return view('edit-team',compact('team',$team));
        //return view('add-team');
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'club' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //print_r($request);
        if ($files = $request->file('logo')) {
           $destinationPath = 'public/img/'; // upload path
           $logoImage = time() . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $logoImage);
           $insert['logo'] = "$logoImage";
        }
         
        $insert['name'] = $request->get('name');
        $insert['club'] = $request->get('club');
        $t = Team::create($insert);
        //print_r($t);
        
        return Redirect::to('teams')->with('success','Greate! Team created successfully.');
    }
    
    
    public function update(Request $request){
        $id = $request->input('id');
        $team = Team::find($id);
        $request->validate([
            'name' => 'required',
            'club' => 'required',
        ]);
        if($request->file('logo')){
            if ($files = $request->file('logo')) {
               $destinationPath = 'public/img/'; // upload path
               $logoImage = time() . "." . $files->getClientOriginalExtension();
               $files->move($destinationPath, $logoImage);
               //$logo = "$logoImage";
               $team->logo = $logoImage;
            }
        }
        $team->name = $request->get('name');
        $team->club = $request->get('club');
        $team->save();
        
        return Redirect::to('teams')->with('success','Greate! Team updated successfully.');
    }
    
    public function destroy(Request $request){
        $id = $request->input('id');
        Team::find($id)->delete();
        return Redirect::to('teams')->with('success','Greate! Team deteled successfully.');
    }
}

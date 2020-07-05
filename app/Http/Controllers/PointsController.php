<?php

namespace App\Http\Controllers;
use App\Point;
use App\Fixture;
use App\Team;
use DB;
use Redirect;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function update(Request $request){
        $points = $request->get('teamPoints');
        $team = $request->get('team');
        
        for($i=0;$i<count($points);$i++){
            $point = new Point();
            $point->fixtureId = $request->input('fid');
            $point->teamId = $team[$i];
            $point->teamPoints = $points[$i];
            $point->save();
        //$t = Point::create($insert);
        }
        
        
        return Redirect::to('fixtures')->with('success','Greate! Points updated successfully.');
    }
    
    public function points()
    {
        $dataArr = array();
        $data = DB::table('points')
        ->select('points.teamId',DB::raw('SUM(points.teamPoints) as totalPoints'))
        ->groupBy('points.teamId')
        ->orderByRaw('totalPoints DESC')
        ->get();    	
        for($i=0;$i<count($data);$i++){
            //print_r($data[$i]->teamId);
            $id = $data[$i]->teamId;
            $team = Team::find($id);
            $data1["team"] = $team->name;
            $data1["logo"] = $team->logo;
            $data1["total"] = $data[$i]->totalPoints;
            //$data["team"] = $team->name;
            $dataArr["points"][$i] = $data1;
        }
        //print_r($dataArr);
        return view('points',compact('dataArr'));
    }
}

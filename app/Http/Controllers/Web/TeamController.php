<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Request;

class TeamController extends Controller
{
    public function team(){
        $teams = Team::all();
        return view('web.team', compact('teams'));
    }
    public function viewTeam($id){
        $view_team = Team::find($id);
        return view('web.view-team', compact('view_team'));
    }
}

<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\FacultyCategory;
use App\Models\FacultySubcategory;
use App\Models\Team;
use Illuminate\Http\Request;

class WebFacultyController extends Controller
{
    public function faculty()
    {
        $faculties = FacultyCategory::all();
        $facultyCount = $faculties->count();
        return view('web.faculty', compact('faculties','facultyCount'));
    }
    public function viewfaculties($id)
    {
        $viewfaculties = FacultySubcategory::where('faculty_id',$id)->get();
        return view('web.faculty_subcat', compact('viewfaculties'));
    }
    public function teams($id){
        $subcategory = FacultySubcategory::find($id);
        $teams = Team::where('faculty_subcat_id',$id)->get();
        return view('web.teams',compact('teams','subcategory'));
    }
    public function viewTeam($id){
        $view_team = Team::find($id);
        return view('web.view-team', compact('view_team'));
    }
}

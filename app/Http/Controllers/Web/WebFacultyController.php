<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\FacultyCategory;
use App\Models\FacultySubcategory;
use Illuminate\Http\Request;

class WebFacultyController extends Controller
{
    public function faculty()
    {
        $faculties = FacultyCategory::all();
        return view('web.faculty', compact('faculties'));
    }
    public function viewfaculties($id)
    {
        $viewfaculties = FacultySubcategory::where('faculty_id',$id)->get();
        return view('web.faculty_subcat', compact('viewfaculties'));
    }
}

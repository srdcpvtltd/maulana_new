<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function chancellor_1(){
        return view('web.chancellor_1');
    }

    public function vc(){
        return view('web.vc');
    }

    public function universityAuthority(){
        return view('web.university_authority');
    }

    public function statutoryBodies(){
        return view('web.statutory_bodies');
    }

    public function universityOfficers(){
        return view('web.university_officers');
    }

    public function directory(){
        return view('web.directory');
    }
}

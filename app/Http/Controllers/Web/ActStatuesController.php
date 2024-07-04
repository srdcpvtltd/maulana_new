<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActStatuesController extends Controller
{
    public function actStatutes(){
        return view('web.act_statutes');
    }
}

<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\City;
use App\Models\CollegeCourse;
use App\Models\CollegeProfile;
use App\Models\PaymentHistory;
use App\Models\Role;
use App\Models\Semester;
use App\Models\State;
use App\Models\StudentProfile;
use App\Models\StudentProfileAddress;
use App\Models\Subject;
use App\Models\TeacherProfile;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return redirect()->route('admin.dashboard.index');
        } else {
            toastr()->error('Wrong Password.');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsectionController extends Controller
{
    public function list()
    {
        $student = Student::all();
        return view('admin.web.student.list', compact('student'));
    }
    public function add()
    {
        return view('admin.web.student.add');
    }
    public function store(Request $request)
    {
        $store = new Student;
        $store->icon = $request->icon;
        $store->heading = $request->heading;
        $store->url = $request->url;

        $store->save();
        toastr()->success('Student Added Successfully!');
        return redirect()->route('admin.student.list');
    }
    public function edit($id)
    {
        $edit = Student::find($id);
        return view('admin.web.student.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $update = Student::find($request->id);
        $update->icon = $request->icon;
        $update->heading = $request->heading;
        $update->url = $request->url;
        $update->save();
        toastr()->success('Edited Successfully!');
        return redirect()->route('admin.student.list');
    }
    public function delete($id){
        $delete = Student::find($id);
        if($delete){
            $delete->delete();
            toastr()->success('Deleted Successfully!');
            return redirect()->back();
        }
        toastr()->success('Something Wents Wrong !');
            return redirect()->back();
    }
}

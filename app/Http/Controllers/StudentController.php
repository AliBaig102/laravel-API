<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Response;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            "student_name"=>"required",
            "student_city"=>"required",
            "student_fees"=>"required",
        ]);

        return Student::insert([
            'student_name'=>$request->student_name,
            'student_city'=>$request->student_city,
            'student_fees'=>$request->student_fees,
        ]);
    }

    public function show($id)
    {
        return Student::find($id);
    }

    public function update(Request $request,$id)
    {

        $request->validate([
            "student_name"=>"required",
            "student_city"=>"required",
            "student_fees"=>"required",
        ]);

        $result= Student::where('student_id',$id)->update([
            'student_name'=>$request->student_name,
            'student_city'=>$request->student_city,
            'student_fees'=>$request->student_fees,
        ]);
        if ($result) {
            return response()->json(["Result"=>"data updated"]);
        }
    }

    public function destroy(Request $request)
    {
        $id=$request->student_id;
        $result= Student::where('student_id',$id)->delete();
        if ($result) {
            return response()->json(["Result"=>"data Delete Successfully"]);
        }
    }
}

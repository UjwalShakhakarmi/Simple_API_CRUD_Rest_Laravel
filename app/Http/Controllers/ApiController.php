<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $req)
    {
        $stud = new Student();
        $stud->fname = $req->input('fname');
        $stud->lname = $req->input('lname');
        $stud->email = $req->input('email');
        $stud->password = $req->input('password');

        $stud->save();
        return response()->json($stud);
        
    }
    public function showData()
    {
        $students = Student::all();
        return response()->json($students);
    }
    public function ShowById($id)
    {
        $student = Student::find($id);
        return response() -> json($student);
    }
    public function UpdateById($id,Request $req)
    {
        $student = Student::find($id);
        $student->fname = $req->input('fname');
        $student->lname = $req->input('lname');
        $student->email = $req->input('email');
        $student->password = $req->input('password');
        $student -> save();

        return response() -> json($student);
    }
    public function DeleteById($id)
    {
        $student = Student::find($id);
        $student->delete();
        return response() -> json($student);


    }
}

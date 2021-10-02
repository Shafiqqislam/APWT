<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function Create(){
        return view('pages.students.create');
    }
    public function createSubmit(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
                'id'=>'required|regex:/^[\d]{2}-[0-9]{3,5}-[0-9]$/',
                'dob'=>'required',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'id.required'=>'Please put your aiub student ID',
                'name.min'=>'Name must be greater than 5 charcters'
               
            ]
        
           
        );
        $var = new Student();
        $var->name= $request->name;
        $var->s_id = $request->id;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->dob = $request->dob;
        $var->save();
        return "ok";
    }
    public function list(){
       
         $students = Student::all();
        return view('pages.students.list')->with('students',$students);
    }
    public function edit(Request $request){
        $id = $request->id;
        $student = Student::where('id',$id)->first();
        return $student;

    }
}

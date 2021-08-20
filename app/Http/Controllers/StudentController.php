<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        return view('Students.index')->with(['students' => $student ->get()]);
    }   
    
    public function create(Subject $subjects)
    {
        return view('Students.create')->with(['subjects'=> $subjects->get()]);
        
    }
    
    public function store(Request $request, Student $student)
    {
        $input_student = $request['student'];
        $student->fill($input_student)->save();
        $student->subjects()->attach($request->subject_array); 
        return redirect('/students');
    }
}

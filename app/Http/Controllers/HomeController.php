<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\UFPclass;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $students = Student::paginate(10);
        return view('index',compact('students'));
    }

    public function about(){
        return view('about');
    }

    public function createStudent(){
        return view('createStudent');
    }

    public function createClass(){
        return view('createClass');
    }

    public function allClasses(){
        $classes = UFPclass::paginate(10);
        return view('allClasses',compact('classes'));
    }

    public function enroll(Student $student){
        $classes = UFPclass::all();
        return view('enroll',compact('classes'),compact('student'));
    }

    public function enrolledStudents(UFPclass $class){
        $students = Student::where('class', $class->name)->paginate(10);
        return view('index',compact('students'),compact('class'));
    }

}

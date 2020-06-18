<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomePageController extends Controller
{
    public function index(){
        
        // query
        $students = Student::all();   
        //dd($students);

        return view('homePage', compact('students'));
    }
}

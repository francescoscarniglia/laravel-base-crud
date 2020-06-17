<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; //import fort $students

class HomeController extends Controller
{
    public function index(){
        // query - ottengo tutti i record da una tabella
        $students = Student::all();
        @dd($students);

        
        // view - welcome
        return view('welcome');
    }
}

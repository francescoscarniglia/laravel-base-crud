<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; //import fort $students

class HomeController extends Controller
{
    public function index(){
        // query - ottengo tutti i record da una tabella
        //$students = Student::all(); //select * from students
        //@dd($students);
        
        // WHERE 
        // $students = Student::where('id', 2)->get();
        //  3 params
        // $students = Student::where('id', '<>', '1')
        //     ->orderBy('name', 'asc') //due parametri, 1° = colonna / 2° = direzione
        //     ->limit(2)
        //     ->get(); 

        // FIRST

        // $students = Student::where('id',  '1')->first();
        // dd($students);
        // $students[] = Student::where('id',  '1')->first();

        // FIND
        $students[] = Student::find(2);
        
        // view - welcome
        return view('welcome', compact('students'));
    }
}

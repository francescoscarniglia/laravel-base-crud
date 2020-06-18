@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4 text-muted text-center">Home page</h1>
    <section class="student">
    <h2 class="text-info mb-4">Student List</h2>
         <table class="table">
             <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Description</th>
                </tr>
             </thead>
             <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td> {{ $student->name }} </td>
                        <td> {{ $student->age }} </td>
                        <td> {{ $student->description }} </td>
                    </tr>
                    @endforeach
             </tbody>
         </table>   
    </section>
@endsection
    
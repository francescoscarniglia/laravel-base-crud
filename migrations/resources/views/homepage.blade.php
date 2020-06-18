@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4 text-muted text-center">Home page</h1>
    <section class="student">
        <h2 class="text-info">Student List</h2>
         <table class="table">
             <th>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Description</th>
                </tr>
             </th>
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
    
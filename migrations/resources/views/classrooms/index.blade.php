@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4 text-info text-center">Classrooms</h1>
    <section class="classrooms">
         <table class="table">
             <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>
            
                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                </tr>
             </thead>
             <tbody>
                  @foreach($classrooms as $classroom)
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->name }}</td>
                        <td> Show </td>
                        <td> Update </td>
                        <td> Delete </td>
                    </tr>
                  @endforeach
             </tbody>
         </table>   
    </section>
@endsection
    
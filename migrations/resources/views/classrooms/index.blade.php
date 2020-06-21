@extends('layouts.main')

@section('main-content')
    @if(session('deleted'))
         <div class="alert alert-success">
         {{ session('deleted') }} eliminato con successo
         </div>   
    @endif
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
                        <td> <a class="btn btn-success" href="{{ route('classrooms.show', $classroom->id) }}"> Show</a> </td>
                        <td> <a class="btn btn-warning" href=" {{ route('classrooms.edit', $classroom->id) }}">Edit</a></td>
                        <td> 
                            <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                         </td>
                    </tr>
                  @endforeach
             </tbody>
         </table>   
    </section>
@endsection
    
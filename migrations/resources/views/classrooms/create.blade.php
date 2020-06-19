@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4 text-info text-center">Create a new classroom</h1>

    @if($errors->any())
    <div class="alert alert-info">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- form action = App\Http\Controllers\ClassroomController@store  -->
    <form action="{{ route('classrooms.store') }}" method="POST">
    <!-- token laravel -->
        @csrf 
        <!-- method  POST-->
        @method('POST')

    <!-- form -->
    <div class="col-sm-8 offset-sm-2">
    <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Class name">
            </input>   
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Class description">
            </input>   
        </div>
        <div class="text-right">
        <input class="btn btn-info" type="submit" value="Create">
        </div>        
    </div>
        
    </form>
   
@endsection

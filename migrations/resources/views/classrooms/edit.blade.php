@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4 text-info text-center">Edit classroom</h1>

    @if($errors->any())
    <div class="alert alert-info col-sm-8 offset-sm-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- form action = App\Http\Controllers\ClassroomController@update  -->
    <form action="{{ route('classrooms.update', $classroom->id) }}" method="POST">
    <!-- token laravel -->
        @csrf 
        <!-- method  POST-->
        @method('PATCH')
  
    <!-- form -->
    <div class="col-sm-8 offset-sm-2">
    <div class="form-group">
        <label for="name">Name *</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $classroom->name) }}" placeholder="Class name">
            </input>   
        </div>
        <div class="form-group">
        <label for="description">Description *</label>
            <input type="text" class="form-control" name="description" value="{{ old('description', $classroom->description) }}" placeholder="Class description">
            </input>   
        </div>
        <div class="text-right">
        <input class="btn btn-info" type="submit" value="Create">
        </div>        

        <p class="small">* = required</p>
    </div>
        
    </form>
   
@endsection

@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4 text-info text-center">{{$classroom->name}}</h1>
    <ul class="list-group">
        <li class="list-group-item">
            ID : {{$classroom->id}}
        </li>
        <li class="list-group-item">
            CREATED AT : {{$classroom->created_at}}
        </li>
        <li class="list-group-item">
            UPDATE AT : {{$classroom->updated_at}}
        </li>

        <li class="list-group-item">
            DESCRIPTION : {{$classroom->description}}
        </li>
    </ul>
    
@endsection
    
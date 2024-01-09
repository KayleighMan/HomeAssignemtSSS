@extends('layouts.main')

@section('content')
<h1>All Cars Models</h1>
<a href="{{route('cars.create')}}">Add a new Car</a>
<a href="{{route('cars.show', 1)}}">Show a specific Car</a>
@endsection

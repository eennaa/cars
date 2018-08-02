@extends('layouts.master') 

@section('title')
    Cars
@endsection

@section('content')            
    @foreach($cars as $car)
       <ul> <a href="{{ "/cars/" .   $car->id }} "  >  {{ $car->producer }} - {{ $car->title }} </a>  </ul>
    @endforeach            
@endsection
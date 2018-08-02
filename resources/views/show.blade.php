@extends('layouts.master')

@section('title')
    {{ $car->producer }} {{ $car->title }}
@endsection

@section('content')
    <div class="title"> Title: {{ $car->title }} </div>
    <p> Producer: {{ $car->producer }}  </p>
    <p> Number of doors: {{ $car->number_of_doors }} </p>
@endsection
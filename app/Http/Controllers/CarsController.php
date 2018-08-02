<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = \App\Car::all();
        return view('index', compact('cars'));
    }

    public function show($id)
    {
        $car = \App\Car::findOrFail($id);
        return view('show', compact('car'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $manufacturers = Manufacturer::orderBy('name')->pluck('name','id');
        return view('cars.index' , compact ('cars', 'manufacturers'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }
}

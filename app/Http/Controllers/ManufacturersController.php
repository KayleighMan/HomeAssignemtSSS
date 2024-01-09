<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturersController extends Controller
{

    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturers.index' , compact ('manufacturers'));
    }
    
}

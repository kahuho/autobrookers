<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view('car-display-card', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function show($id)
    {
        $car = Car::findOrFail($id);
        
        return view('car-detailed-view', compact('car'));

    }

    
   


}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->has('make')) {
            $query->where('make', 'like', '%' . $request->input('make') . '%');
        }

        if ($request->has('model')) {
            $query->where('model', 'like', '%' . $request->input('model') . '%');
        }

        if ($request->has('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->has('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        $cars = $query->paginate(16);

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

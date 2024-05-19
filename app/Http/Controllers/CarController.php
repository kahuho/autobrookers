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

        $cars = Car::paginate(16);

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

    // Query the db to support searched for specific models, makes, and prices
    public function search(Request $request)
    {
        $query = $request->input('query');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $cars = Car::query();

        // Search by make or model
        if ($query) {
            $cars->where(function($q) use ($query) {
                $q->where('make', 'like', "%$query%")
                  ->orWhere('model', 'like', "%$query%");
            });
        }

        // Filter by minimum price
        if ($minPrice) {
            $cars->where('price', '>=', $minPrice);
        }

        // Filter by maximum price
        if ($maxPrice) {
            $cars->where('price', '<=', $maxPrice);
        }

        $cars = $cars->paginate(8);

        if ($cars->isEmpty()) {
            $message = 'No cars found matching your search criteria.';
        } else {
            $message = null;
        }

        return view('car-display-card', ['cars' => $cars, 'message' => $message]);
    }




}

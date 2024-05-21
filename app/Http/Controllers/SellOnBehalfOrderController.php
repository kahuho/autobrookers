<?php

namespace App\Http\Controllers;

use App\Models\SellOnBehalfOrder;
use Illuminate\Http\Request;

class SellOnBehalfOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * display the form for adding car details by a potential client.
     */
    public function createCarDetailsForm(Request $request)
    {
        $car = $request->session()->get('car');

        return view('sell_on_behalf.car-details', compact('car'));
    }

    //post data for the car details form
    public function postCarDetailsForm(Request $request)
    {
        $validatedData = $request->validate([
            'registration_number' => 'required|string',
            'make' => 'required|string',
            'model' => 'required|string',
            'mileage' => 'required|integer',
            'year_of_manufacture' => 'required|integer',
            'accident_history' => 'required|in:Yes,No',
            'asking_price' => 'required|numeric',
            'location' => 'required|string',
        ]);

        if(empty($request->session()->get('car'))){
            $car = new SellOnBehalfOrder();
            $car->fill($validatedData);
            $request->session()->put('car', $car);
        }else{
            $car = $request->session()->get('car');
            $car->fill($validatedData);
            $request->session()->put('car', $car);
        }

        return redirect()->route('sell_on_behalf.seller-details');
    }


    // Create form for adding personal details to be used for contact
    public function createSellerDetailsForm(Request $request)
    {
        $car = $request->session()->get('car');

        return view('sell_on_behalf.seller-details',compact('car'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function postSellerDetailsForm(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'id_number' => 'required|string',
        ]);

        $car = $request->session()->get('car');

        $car->fill($validatedData);

        $car->save();

        $request->session()->forget('car');

        return redirect()->route('cars.index')->with('success', 'Your request was submitted successfully. One of our agents will get in touch with you soon. In the meantime browse our cataglog to find your next vehicle.');


    }



}

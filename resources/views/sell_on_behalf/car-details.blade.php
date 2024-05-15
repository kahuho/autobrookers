<!-- resources/views/sell_on_behalf/partials/car_details.blade.php -->
@extends('layout')
@section('content')

<div class="container mx-auto px-4 lg:px-0 lg:max-w-xl lg:w-1/2">
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4">

        <form action="{{ route('sell_on_behalf.car-details.post') }}" method="POST">
            @csrf
            <!-- Car Details Fields -->
            <div class="mb-4">
                <label for="registration_number" class="block font-medium text-gray-700">Registration Number</label>
                <input type="text" name="registration_number" id="registration_number" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="make" class="block font-medium text-gray-700">Make</label>
                <input type="text" name="make" id="make" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="model" class="block font-medium text-gray-700">Model</label>
                <input type="text" name="model" id="model" class="form-input mt-1 block w-full" required>
            </div>
            
            <div class="mb-4">
                <label for="mileage" class="block font-medium text-gray-700">mileage</label>
                <input type="text" name="mileage" id="mileage" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="year_of_manufacture" class="block font-medium text-gray-700">Year of Manufacture</label>
                <input type="text" name="year_of_manufacture" id="year_of_manufacture" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="accident_history">Accident History:</label>
                    <select id="accident_history" name="accident_history" required>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select><br><br>
            </div>

            <div class="mb-4">
                <label for="asking_price" class="block font-medium text-gray-700">Asking Price</label>
                <input type="number" name="asking_price" id="asking_price" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="location" class="block font-medium text-gray-700">Location</label>
                <input type="text" name="location" id="location" class="form-input mt-1 block w-full" required>
            </div>


            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Next</button>
        </form>
</div>
    </div>
        </div>

@endsection

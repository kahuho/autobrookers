<!-- resources/views/sell_on_behalf/partials/car_details.blade.php -->
@extends('layout')
@section('content')

<div class="container mx-auto px-4 lg:px-0 lg:max-w-xl lg:w-1/2">
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4">
            <h1 class="text-xl font-bold mb-4">Enter Car Details</h1>
            
            <!-- Display validation error messages using validator -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('sell_on_behalf.car-details.post') }}" method="POST">
                @csrf
                <!-- Car Details Fields -->
                <div class="mb-4">
                    <label for="registration_number" class="block font-medium text-gray-700">Registration Number</label>
                    <input type="text" name="registration_number" id="registration_number" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="make" class="block font-medium text-gray-700">Make</label>
                    <input type="text" name="make" id="make" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="model" class="block font-medium text-gray-700">Model</label>
                    <input type="text" name="model" id="model" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>
                
                <div class="mb-4">
                    <label for="mileage" class="block font-medium text-gray-700">Mileage</label>
                    <input type="text" name="mileage" id="mileage" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="year_of_manufacture" class="block font-medium text-gray-700">Year of Manufacture</label>
                    <input type="text" name="year_of_manufacture" id="year_of_manufacture" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="accident_history" class="block font-medium text-gray-700">Accident History</label>
                    <select id="accident_history" name="accident_history" class="form-select mt-1 block w-full border border-black rounded bg-white" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="asking_price" class="block font-medium text-gray-700">Asking Price</label>
                    <input type="number" name="asking_price" id="asking_price" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="location" class="block font-medium text-gray-700">Location</label>
                    <input type="text" name="location" id="location" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="flex justify-between mt-8">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

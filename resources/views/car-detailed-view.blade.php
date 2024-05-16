
@extends('layout')
@section('content')

    <div class="container mx-auto px-4 lg:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-wrap justify-center">
                <!-- Car Images -->
                <div class="w-full lg:w-1/2 px-4 mb-8">
                    <div class="flex justify-center">

                        @foreach($car->images as $image)
                            <img src="{{ asset($image) }}" alt="Car Image" class="w-full h-auto">
                        @endforeach

                    </div>
                </div>

                <!-- Car Details -->
                <div class="w-full lg:w-1/2 px-4 mb-8">
                    <h1 class="text-2xl font-bold mb-4">{{ $car->make }} {{ $car->model }}</h1>
                    <p class="text-gray-700 mb-4">{{ $car->description }}</p>

                    <!-- Other Specs Table -->
                    <div class="mb-4">
                        <h2 class="text-lg font-semibold mb-2">Specifications</h2>
                        <table class="w-full">
                            <tbody>
                                <tr>
                                    <td class="font-bold">Year of Manufacture:</td>
                                    <td>{{ $car->year }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Mileage:</td>
                                    <td>{{ $car->mileage }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Available:</td>
                                    <td>{{ $car->availability ? 'Yes' : 'No'}}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Current Location:</td>
                                    <td>{{ $car->current_location }}</td>
                                </tr> 
                                <tr>
                                    <td class="font-bold">Horse Power:</td>
                                    <td>{{ $car->horse_power }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Transmission:</td>
                                    <td>{{ $car->transmission }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Torque:</td>
                                    <td>{{ $car->torque }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Drive:</td>
                                    <td>{{ $car->drive }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Fuel Type:</td>
                                    <td>{{ $car->fuel_type }}</td>
                                </tr>
                                <tr>
                                    <td class="font-bold">Engine Size:</td>
                                    <td>{{ $car->engine_size }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Inquiry Buttons -->
                    <div class="mt-8">
                        <a href="" class="bg-green-500 text-white py-2 px-4 rounded mr-4">WhatsApp Inquiry</a>
                        <a href="" class="bg-blue-500 text-white py-2 px-4 rounded">Call Inquiry</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

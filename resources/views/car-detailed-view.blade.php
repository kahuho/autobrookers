@extends('layout')
@section('content')

    <div class="container mx-auto px-4 lg:px-0">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-wrap justify-center">
                <!-- Car Images -->
                <div class="w-full lg:w-1/2 px-4 mb-8">
                    <div id="carCarousel" class="relative">
                        <div class="carousel-inner relative w-full overflow-hidden">
                            @foreach($car->images as $index => $image)
                                <div class="carousel-item @if($index === 0) active @endif relative float-left w-full">
                                    <img src="{{ asset($image) }}" alt="Car Image" class="block w-full">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev absolute top-0 bottom-0 left-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next absolute top-0 bottom-0 right-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- Car Details -->
                <div class="w-full lg:w-1/2 px-4 mb-8">
                    <h1 class="text-2xl font-bold mb-4">{{ $car->make }} {{ $car->model }} ({{ $car->year }})</h1>
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
                    <div class="mt-8 flex flex-col space-y-4">
                        <a href="https://wa.me/254707833551?text=Hi, I am interested in this {{ $car->make }} {{ $car->model }} ({{ route('cars.show', ['id' => $car->id]) }})" class="bg-green-500 text-white py-2 px-4 rounded flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp Inquiry
                        </a>
                        <a href="tel:+254707833551" class="bg-blue-500 text-white py-2 px-4 rounded flex items-center justify-center">
                            <i class="fas fa-phone mr-2"></i> Call Inquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

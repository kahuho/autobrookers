@extends('layout')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($cars as $car)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Car Image -->
                <img src="{{ asset($car->images[0] ?? 'default_image.jpg') }}" alt="Car Image" class="h-64 w-full object-cover object-center">

                <div class="p-4">
                    <!-- Car Title -->
                    <h2 class="text-lg font-semibold text-gray-800">{{ $car->make }} {{ $car->model }}</h2>

                    <!-- Car Brief Description -->
                    <p class="text-sm text-gray-600 mt-1">{{ Str::limit($car->description, 100) }}</p>

                    <!-- Tags -->
                    <div class="flex flex-wrap mt-2">
                        <!-- Drive -->
                        <div class="bg-gray-200 text-gray-700 rounded-full px-2 py-1 text-xs font-semibold mr-2 mb-2">{{ $car->drive }}</div>

                        <!-- Engine Size -->
                        <div class="bg-gray-200 text-gray-700 rounded-full px-2 py-1 text-xs font-semibold mr-2 mb-2">{{ $car->engine_size }}L</div>

                        <!-- Fuel Type -->
                        <div class="bg-gray-200 text-gray-700 rounded-full px-2 py-1 text-xs font-semibold mr-2 mb-2">{{ $car->fuel_type }}</div>
                    </div>

                    <div class="mt-4 flex items-center justify-between">
                        <!-- Car Year -->
                        <span class="text-gray-700">{{ $car->year }}</span>

                        <!-- Car Price -->
                        <span class="font-semibold text-gray-900">KSH {{ number_format($car->price, 2) }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

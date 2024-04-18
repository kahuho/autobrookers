@extends('layout')

@section('content')
    
@endsection
@foreach ($cars as $car)

<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Car Image -->
    <img src="{{ asset($car->images[0] ?? 'default_image.jpg') }}" alt="Car Image" class="h-64 w-full object-cover object-center">

    <div class="p-4">
        <!-- Car Title -->
        <h2 class="text-lg font-semibold text-gray-800">{{ $car->make }} {{ $car->model }}</h2>

        <!-- Car Brief Description -->
        <p class="text-sm text-gray-600 mt-1">{{ Str::limit($car->description, 100) }}</p>

        <div class="mt-4 flex items-center justify-between">
            <!-- Car Year -->
            <span class="text-gray-700">{{ $car->year }}</span>

            <!-- Car Price -->
            <span class="font-semibold text-gray-900">$ {{ number_format($car->price, 2) }}</span>
        </div>
    </div>
</div>


@endforeach
@endsection
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
                                @php
                                    $imagePath = $image;
                                    $imageUrl = Storage::url($imagePath);
                                @endphp
                                <div class="carousel-item @if($index === 0) active @endif relative float-left w-full" data-index="{{ $index }}">
                                    <img src="{{ $imageUrl }}" alt="Car Image" class="block w-full h-auto">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev absolute top-0 bottom-0 left-0 flex items-center justify-center p-2 text-center bg-gray-800 bg-opacity-50 hover:bg-opacity-75 text-white" onclick="prevSlide()">
                            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true">&lt;</span>
                            <span class="ml-2">Previous</span>
                        </button>
                        <button class="carousel-control-next absolute top-0 bottom-0 right-0 flex items-center justify-center p-2 text-center bg-gray-800 bg-opacity-50 hover:bg-opacity-75 text-white" onclick="nextSlide()">
                            <span class="mr-2">Next</span>
                            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true">&gt;</span>
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
                                <!-- Add specifications as necessary -->
                                <tr>
                                    <td class="font-bold">Year of Manufacture:</td>
                                    <td>{{ $car->year }}</td>
                                </tr>
                                <!-- Add other specs -->
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

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('hidden', i !== index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        }

        // Initialize the first slide
        showSlide(currentIndex);
    </script>

@endsection

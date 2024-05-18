
@extends('layout')

@section('content')

<!-- Hero Section -->
<section class="bg-gray-800 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold mb-4">About Us</h1>
        <p class="text-lg">Your trusted partner in the automobile industry</p>
    </div>
</section>

<!-- Company Information Section -->
<section class="py-20">
    <div class="container mx-auto px-6 md:px-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">Who We Are</h2>
            <p class="text-lg text-gray-600 mt-4">We are a leading automobile broker providing exceptional services to our clients.</p>
        </div>
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 md:ml-8 mt-8 md:mt-0">
                <h3 class="text-2xl font-bold text-gray-800">Our Mission</h3>
                <p class="text-gray-600 mt-4">Our mission is to simplify the car buying and selling process for our clients, offering top-notch services and unmatched customer support. We strive to make every transaction smooth, transparent, and stress-free.</p>
                <h3 class="text-2xl font-bold text-gray-800 mt-8">Our Vision</h3>
                <p class="text-gray-600 mt-4">Our vision is to be the go-to automobile broker, known for our integrity, reliability, and customer-centric approach. We aim to build long-lasting relationships with our clients by providing excellent service and value.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="bg-gray-100 py-20">
    <div class="container mx-auto px-6 md:px-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">What We Offer</h2>
            <p class="text-lg text-gray-600 mt-4">Explore our range of services designed to cater to all your automobile needs.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800">Buy a Car</h3>
                <p class="text-gray-600 mt-4">Find your dream car from our extensive inventory. We offer a wide range of makes and models to suit every preference and budget.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800">Sell Your Car</h3>
                <p class="text-gray-600 mt-4">Get the best value for your car with our hassle-free selling process. We handle everything from valuation to final sale.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800">Sell on Behalf</h3>
                <p class="text-gray-600 mt-4">Let us sell your car on your behalf. We take care of all the details, ensuring you get the best possible price with minimal effort.</p>
            </div>
        </div>
    </div>
</section>

<!-- Customer Testimonials Section -->
<section class="py-20">
    <div class="container mx-auto px-6 md:px-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800">What Our Clients Say</h2>
            <p class="text-lg text-gray-600 mt-4">Hear from our satisfied clients about their experiences with us.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-600">"The team at AutoBroker made buying my new car a breeze. They were professional, friendly, and handled everything perfectly."</p>
                <h3 class="mt-4 text-gray-800 font-bold">- John Doe</h3>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-600">"Selling my car was never this easy. AutoBroker took care of everything and got me a great price. Highly recommend their services!"</p>
                <h3 class="mt-4 text-gray-800 font-bold">- Jane Smith</h3>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-600">"I used the sell on behalf service, and it was fantastic. AutoBroker handled all the details, and I got a great deal without any hassle."</p>
                <h3 class="mt-4 text-gray-800 font-bold">- Emily Johnson</h3>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-blue-500 text-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Buy or Sell Your Car?</h2>
        <p class="text-lg mb-8">Contact us today and let us help you with all your automobile needs.</p>
        <a href="{{ route('contact') }}" class="px-6 py-3 bg-white text-blue-500 font-bold rounded-lg">Get in Touch</a>
    </div>
</section>

@endsection

<!-- resources/views/contact.blade.php -->

@extends('layout')

@section('content')

<!-- Hero Section -->
<section class="bg-gray-800 text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-lg">We'd love to hear from you. Get in touch with us for any queries or support.</p>
    </div>
</section>

<!-- Contact Form and Information Section -->
<section class="py-20">
    <div class="container mx-auto px-6 md:px-12">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg mb-8">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex flex-col md:flex-row">
            <!-- Contact Form -->
            <div class="md:w-1/2 md:pr-8">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Send Us a Message</h2>
                <form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('name')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('email')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-bold mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        @error('subject')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                        @error('message')
                            <div class="text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded-lg hover:bg-blue-700">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="md:w-1/2 md:pl-8 mt-8 md:mt-0">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Contact Information</h2>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <p class="text-gray-600 mb-4">Feel free to reach out to us through any of the following methods:</p>
                    <p class="text-gray-800 font-bold mb-2">Address:</p>
                    <p class="text-gray-600 mb-4">1234 Car Lane, Auto City, CA 90000</p>
                    <p class="text-gray-800 font-bold mb-2">Phone:</p>
                    <p class="text-gray-600 mb-4">(123) 456-7890</p>
                    <p class="text-gray-800 font-bold mb-2">Email:</p>
                    <p class="text-gray-600 mb-4">info@trustedautobroker.com</p>
                    <p class="text-gray-800 font-bold mb-2">Working Hours:</p>
                    <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                    <p class="text-gray-600">Saturday: 10:00 AM - 4:00 PM</p>
                    <p class="text-gray-600">Sunday: Closed</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-4xl font-bold text-gray-800 text-center mb-8">Our Location</h2>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
            <div id="map" class="w-full h-64"></div>
        </div>
    </div>
</section>

<!-- Map Script -->
<script>
    function initMap() {
        var location = { lat: 34.052235, lng: -118.243683 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

@endsection

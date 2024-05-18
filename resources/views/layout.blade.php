<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusted Autobrokers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body class="bg-gray-100">

<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#" class="flex items-center">
                    <!-- Your company logo goes here -->
                    <img class="h-8 w-auto" src="company_logo.png" alt="Company Logo">
                </a>
            </div>

            <!-- Navbar items -->
            <div class="hidden sm:block">
                <div class="flex space-x-4">
                    <a href="{{ route('cars.index') }}" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Vehicles in Stock</a>
                    <a href="{{ route('sell_on_behalf.car-details') }}" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Sell Your Car</a>
                    <a href="{{route('about')}}" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">About</a>
                    <a href="{{route('contact')}}" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Contact Us</a>
                    <!-- Breeze Authentication Links -->
                    @auth
                        <!-- User is authenticated -->
                        <a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Logout</a>
                        </form>
                    @else
                        <!-- User is not authenticated -->
                        <a href="{{ route('login') }}" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Login</a>
                        <a href="{{ route('register') }}" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Register</a>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @yield('content')

</div>

</body>
<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Company Section -->
        <div class="text-center md:text-left">
            <h4 class="text-lg font-semibold mb-4">Company</h4>
            <ul class="text-sm">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </div>

        <!-- Support Section -->
        <div class="text-center md:text-left">
            <h4 class="text-lg font-semibold mb-4">Support</h4>
            <ul class="text-sm">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Shipping & Returns</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
        </div>

        <!-- Location Section -->
        <div class="text-center md:text-left">
            <h4 class="text-lg font-semibold mb-4">Location</h4>
            <p class="text-sm">123 Main St, City, Country</p>
            <p class="text-sm">Phone: +123456789</p>
            <p class="text-sm">Email: info@example.com</p>
        </div>
    </div>

    <!-- Bottom Section (Optional) -->
    <div class="mt-8 text-center">
        <p class="text-sm">&copy; {{ date('Y') }} AutoBroker. All rights reserved.</p>
        <p class="text-sm mt-2">Designed by Kahuho</p>
    </div>
</footer>

</html>

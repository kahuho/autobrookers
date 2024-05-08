<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trusted Autobrokers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Override Tailwind CSS */
        /* Add custom styles here */
    </style>
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
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Vehicles in Stock</a>
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Sell Your Car</a>
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Make an Order</a>
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">About</a>
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-gray-900 font-medium">Search</a>
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
</html>

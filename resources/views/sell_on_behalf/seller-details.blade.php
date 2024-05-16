<!-- resources/views/seller_contact_form.blade.php -->

@extends('layout')

@section('content')

<div class="container mx-auto px-4 lg:px-0 lg:max-w-xl lg:w-1/2">

    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">

        <div class="p-4">

            <h1 class="text-xl font-bold mb-4">Your Contact Details</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @endif


            <form action="{{ route('sell_on_behalf.seller-details.post') }}" method="POST">
                @csrf

                <!-- Seller Contact Fields -->
                <div class="mb-4">
                    <label for="first_name" class="block font-medium text-gray-700">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="last_name" class="block font-medium text-gray-700">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="phone_number" class="block font-medium text-gray-700">Phone Number</label>
                    <input type="tel" name="phone_number" id="phone_number" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="mb-4">
                    <label for="id_number" class="block font-medium text-gray-700">ID Number</label>
                    <input type="text" name="id_number" id="id_number" class="form-input mt-1 block w-full border border-black rounded bg-white" required>
                </div>

                <div class="flex justify-between mt-8">
                    <a href="{{ route('sell_on_behalf.car-details') }}" class="bg-gray-500 text-white py-2 px-4 rounded">Previous</a>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

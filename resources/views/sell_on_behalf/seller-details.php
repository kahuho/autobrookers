<!-- resources/views/seller_contact_form.blade.php -->

@extends('layout')
@section('content')

<div class="container mx-auto px-4 lg:px-0 lg:max-w-xl lg:w-1/2">
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4">
    <h1>Seller Contact Details</h1>

    <form method="post" action="{{ route('sell_on_behalf.seller-details.post') }}">
        @csrf

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

         <label for="id_number">ID Number:</label>
        <input type="text" id="id_number" name="id_number" required><br><br>


        <a href="{{ route('sell_on_behalf.car-details') }}" class="btn btn-danger">Previous</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
        </div>

@endsection

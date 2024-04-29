<!-- resources/views/seller_contact_form.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Seller Contact Details</h1>

    <form method="post" action="{{ route('submit_seller_contact') }}">
        @csrf

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

        <label>Contact Method:</label><br>
        <input type="radio" id="contact_method_email" name="contact_method" value="email" required>
        <label for="contact_method_email">Email</label><br>
        <input type="radio" id="contact_method_whatsapp" name="contact_method" value="whatsapp" required>
        <label for="contact_method_whatsapp">WhatsApp</label><br><br>

        <a href="{{ route('show_car_details_form') }}" class="btn btn-danger">Previous</a>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

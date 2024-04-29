<!-- resources/views/car_details_form.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Upload Vehicle Details</h1>

    <form method="post" action="{{ route('submit_car_details') }}">
        @csrf

        <label for="registration_number">Car Registration Number:</label>
        <input type="text" id="registration_number" name="registration_number" required><br><br>

        <label for="make">Car Make:</label>
        <input type="text" id="make" name="make" required><br><br>

        <label for="model">Car Model:</label>
        <input type="text" id="model" name="model" required><br><br>

        <label for="registration_year">Registration Year:</label>
        <input type="number" id="registration_year" name="registration_year" required><br><br>

        <label for="mileage">Mileage:</label>
        <input type="number" id="mileage" name="mileage" required>
        <select name="mileage_unit" id="mileage_unit">
            <option value="km">KM</option>
            <option value="miles">Miles</option>
        </select><br><br>

        <label for="accident_history">Accident History:</label>
        <select name="accident_history" id="accident_history" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="asking_price">Asking Price:</label>
        <input type="number" id="asking_price" name="asking_price" required><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>

        <button type="submit">Next</button>
    </form>
@endsection

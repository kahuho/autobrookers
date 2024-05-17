<!-- resources/views/partials/simple-search-form.blade.php -->

<div class="container mx-auto mt-8">
    <form action="{{ route('car.index') }}" method="GET" class="mb-8">
        <div class="flex space-x-4">
            <input type="text" name="make" placeholder="Search Make" value="{{ request('make') }}" class="px-4 py-2 border rounded w-full md:w-1/3">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Search</button>
        </div>
    </form>
</div>

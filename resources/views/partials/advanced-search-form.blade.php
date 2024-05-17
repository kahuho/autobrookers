<!-- resources/views/partials/advanced-search-form.blade.php -->

<div class="container mx-auto mt-8">
    <form action="{{ route('car.index') }}" method="GET" class="mb-8">
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
            <input type="text" name="make" placeholder="Make" value="{{ request('make') }}" class="px-4 py-2 border rounded w-full md:w-1/4">
            <input type="text" name="model" placeholder="Model" value="{{ request('model') }}" class="px-4 py-2 border rounded w-full md:w-1/4">
            <input type="number" name="min_price" placeholder="Min Price" value="{{ request('min_price') }}" class="px-4 py-2 border rounded w-full md:w-1/4">
            <input type="number" name="max_price" placeholder="Max Price" value="{{ request('max_price') }}" class="px-4 py-2 border rounded w-full md:w-1/4">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded w-full md:w-1/4">Search</button>
        </div>
    </form>
</div>

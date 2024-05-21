<!-- resources/views/search-form.blade.php -->

<form action="{{ route('cars.search') }}" method="GET" class="bg-white p-8 rounded-lg shadow-lg flex flex-col sm:flex-row items-center gap-4">
    <div class="w-full sm:flex-1">
        <label for="query" class="sr-only">Search Make or Model</label>
        <input type="text" id="query" name="query" placeholder="Search for make or model" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="w-full sm:flex-1">
        <label for="min_price" class="sr-only">Min Price</label>
        <input type="number" id="min_price" name="min_price" placeholder="Min Price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="w-full sm:flex-1">
        <label for="max_price" class="sr-only">Max Price</label>
        <input type="number" id="max_price" name="max_price" placeholder="Max Price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="w-full sm:flex-1">
        <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded-lg hover:bg-blue-700">Search</button>
    </div>
</form>

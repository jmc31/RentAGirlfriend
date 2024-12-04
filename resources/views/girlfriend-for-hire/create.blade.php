<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add New Girl To Rent
        </h2>
    </x-slot>

    <form action="{{ route('girlfriend-for-hire.store') }}" method="POST">
        @csrf
        <div class="max-w-7xl mx-auto p-6">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input type="number" id="age" name="age" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" class="mt-1 block w-full" required></textarea>
            </div>
            <div class="form-group">
                <label for="rate_per_hour">Rate Per Hour</label>
                <input type="number" name="rate_per_hour" id="rate_per_hour" class="form-control" step="0.01" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Save</button>
        </div>
    </form>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Girlfriend
        </h2>
    </x-slot>

    <form action="{{ route('girlfriend-for-hire.update', $girlfriend->id) }}" method="POST" class="max-w-7xl mx-auto p-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $girlfriend->name) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required>
            @error('name')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
            <input type="number" id="age" name="age" value="{{ old('age', $girlfriend->age) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required>
            @error('age')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" id="address" name="address" value="{{ old('address', $girlfriend->address) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required>
            @error('address')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="contact_no" class="block text-sm font-medium text-gray-700">Contact No</label>
            <input type="text" id="contact_no" name="contact_no"
                value="{{ old('contact_no', $girlfriend->contact_no) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                required>
            @error('contact_no')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('description', $girlfriend->description) }}</textarea>
            @error('description')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="rate_per_hour" class="block text-sm font-medium text-gray-700">Rate per Hour</label>
            <input type="number" id="rate_per_hour" name="rate_per_hour"
                value="{{ old('rate_per_hour', $girlfriend->rate_per_hour) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                step="0.01" required>
            @error('rate_per_hour')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center space-x-4">
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                Update
            </button>
            <a href="{{ route('girlfriend-for-hire.index') }}"
                class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300">
                Cancel
            </a>
        </div>
    </form>
</x-app-layout>

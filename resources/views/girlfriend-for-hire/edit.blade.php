<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Girlfriend
        </h2>
    </x-slot>

    <form action="{{ route('girlfriend-for-hire.update', $girlfriend->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="max-w-7xl mx-auto p-6">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ $girlfriend->name }}" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input type="number" id="age" name="age" value="{{ $girlfriend->age }}" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" class="mt-1 block w-full" required>{{ $girlfriend->description }}</textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Update</button>
        </div>
    </form>
</x-app-layout>

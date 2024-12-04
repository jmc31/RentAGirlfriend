<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            View Girlfriend Details
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6">
        <div class="mb-4">
            <strong>Name:</strong> {{ $girlfriend->name }}
        </div>
        <div class="mb-4">
            <strong>Age:</strong> {{ $girlfriend->age }}
        </div>
        <div class="mb-4">
            <strong>Description:</strong> {{ $girlfriend->description }}
        </div>

        <a href="{{ route('girlfriend-for-hire.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">Back to List</a>
    </div>
</x-app-layout>

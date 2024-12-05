<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Girlfriend Details
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 shadow rounded-lg p-6 mt-6">
        <div class="border-b border-gray-200 pb-4 mb-6">
            <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">Personal Information</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Name</label>
                <p class="mt-1 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $girlfriend->name }}</p>
            </div>
            <div>
                <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Age</label>
                <p class="mt-1 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $girlfriend->age }}</p>
            </div>
        </div>
        <div class="mb-6">
            <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Address</label>
            <p class="mt-1 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $girlfriend->address }}</p>
        </div>
        <div class="mb-6">
            <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Contact No</label>
            <p class="mt-1 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $girlfriend->contact_no }}</p>
        </div>

        <div class="mb-6">
            <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Description</label>
            <p class="mt-1 text-lg text-gray-800 dark:text-gray-200">{{ $girlfriend->description }}</p>
        </div>

        <div class="mb-6">
            <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Rate Per Hour</label>
            <p class="mt-1 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $girlfriend->rate_per_hour }}</p>
        </div>

        <div class="flex justify-end">
            <a href="{{ route('girlfriend-for-hire.index') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                Back to List
            </a>
        </div>
    </div>
</x-app-layout>

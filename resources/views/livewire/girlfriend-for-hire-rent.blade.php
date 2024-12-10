<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Rent Girlfriend: {{ $girlfriend->name }}
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
            <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Description</label>
            <p class="mt-1 text-lg text-gray-800 dark:text-gray-200">{{ $girlfriend->description }}</p>
        </div>

        <div class="mb-6">
            <label class="text-sm font-medium text-gray-500 dark:text-gray-400">Rate Per Hour</label>
            <p class="mt-1 text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $girlfriend->rate_per_hour }}</p>
        </div>

        <form action="{{ route('girlfriend-for-hire.rent', $girlfriend->id) }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="rental_duration" class="text-sm font-medium text-gray-500 dark:text-gray-400">Rental
                    Duration (Hours)</label>
                <input type="number" id="rental_duration" name="rental_duration" min="1"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200"
                    required>
            </div>

            <div class="mb-6">
                <label for="payment_method" class="text-sm font-medium text-gray-500 dark:text-gray-400">Payment
                    Method</label>
                <select id="payment_method" name="payment_method"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200"
                    required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('girlfriend-for-hire.index') }}"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    Back to List
                </a>
                <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:outline-none">
                    Rent Now
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

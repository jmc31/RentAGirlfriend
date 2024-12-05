<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Rent a Girlfriend
        </h2>
    </x-slot>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Age</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Address</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Contact No</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
                                <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Rate Per Hour</th>
                                <th class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach ($girlfriends as $girlfriend)
                                <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $girlfriend->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $girlfriend->age }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $girlfriend->address }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $girlfriend->contact_no }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $girlfriend->description }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $girlfriend->rate_per_hour }}</td>
                                    <td class="px-6 py-4 text-end text-sm font-medium">
                                        <a href="{{ route('girlfriend-for-hire.show', $girlfriend->id) }}" class="text-blue-600 hover:text-blue-800">View</a>
                                        <a href="{{ route('girlfriend-for-hire.edit', $girlfriend->id) }}" class="ml-4 text-yellow-600 hover:text-yellow-800">Edit</a>
                                        <form action="{{ route('girlfriend-for-hire.destroy', $girlfriend->id) }}" method="POST" class="inline ml-4">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">
                        <a href="{{ route('girlfriend-for-hire.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

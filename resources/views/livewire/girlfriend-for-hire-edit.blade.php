<!-- resources/views/girlfriend-for-hire.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Girlfriend for Hire</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center">Girlfriend for Hire List</h1>

        <!-- Add Button -->
        <div class="my-4">
            <a href="{{ route('girlfriend-for-hire.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Add New</a>
        </div>

        <!-- Table with Data -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left">Name</th>
                    <th class="px-6 py-3 text-left">Age</th>
                    <th class="px-6 py-3 text-left">Description</th>
                    <th class="px-6 py-3 text-left">Rate per Hour</th>
                    <th class="px-6 py-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($girlfriends as $girlfriend)
                    <tr>
                        <td class="px-6 py-4">{{ $girlfriend->name }}</td>
                        <td class="px-6 py-4">{{ $girlfriend->age }}</td>
                        <td class="px-6 py-4">{{ $girlfriend->description }}</td>
                        <td class="px-6 py-4">${{ $girlfriend->rate_per_hour }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('girlfriend-for-hire.show', $girlfriend->id) }}" class="text-blue-500">View</a>
                            <a href="{{ route('girlfriend-for-hire.edit', $girlfriend->id) }}" class="text-yellow-500 mx-2">Edit</a>
                            <form action="{{ route('girlfriend-for-hire.destroy', $girlfriend->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

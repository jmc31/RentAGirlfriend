@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Girlfriend For Hire List</h1>
        <a href="{{ route('girlfriend-for-hire.create') }}">Add New Girlfriend</a>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Description</th>
                    <th>Rate per Hour</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($girlfriends as $girlfriend)
                    <tr>
                        <td>{{ $girlfriend->name }}</td>
                        <td>{{ $girlfriend->age }}</td>
                        <td>${{ $girlfriend->address }}</td>
                        <td>${{ $girlfriend->contact_no }}</td>
                        <td>{{ $girlfriend->description }}</td>
                        <td>${{ $girlfriend->rate_per_hour }}</td>
                        <td>
                            <a href="{{ route('girlfriend-for-hire.show', $girlfriend->id) }}">View</a>
                            <a href="{{ route('girlfriend-for-hire.edit', $girlfriend->id) }}">Edit</a>
                            <form action="{{ route('girlfriend-for-hire.destroy', $girlfriend->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

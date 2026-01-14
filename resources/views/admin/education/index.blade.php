@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Education</h1>
    <a href="{{ route('admin.education.create') }}" class="btn btn-primary">Add New Education</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Degree</th>
                <th>Institution</th>
                <th>Year Start</th>
                <th>Year End</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $education)
            <tr>
                <td>{{ $education->id }}</td>
                <td>{{ $education->degree }}</td>
                <td>{{ $education->institution }}</td>
                <td>{{ $education->year_start }}</td>
                <td>{{ $education->year_end ?: 'Present' }}</td>
                <td>
                    <a href="{{ route('admin.education.edit', $education->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.education.destroy', $education->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
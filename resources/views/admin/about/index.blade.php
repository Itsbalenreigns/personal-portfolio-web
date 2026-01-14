@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage About</h1>
    <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Add New About</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <td>{{ $about->id }}</td>
                <td>{{ $about->title }}</td>
                <td>{{ Str::limit($about->description, 50) }}</td>
                <td>
                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" style="display:inline;">
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
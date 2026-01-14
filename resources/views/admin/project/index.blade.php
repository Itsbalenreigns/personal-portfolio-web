@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Projects</h1>
    <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Add New Project</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ Str::limit($project->description, 50) }}</td>
                <td><a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></td>
                <td>
                    <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" style="display:inline;">
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
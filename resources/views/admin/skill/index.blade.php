@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Skills</h1>
    <a href="{{ route('admin.skill.create') }}" class="btn btn-primary">Add New Skill</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
            <tr>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->name }}</td>
                <td>{{ $skill->level }}%</td>
                <td>
                    <a href="{{ route('admin.skill.edit', $skill->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.skill.destroy', $skill->id) }}" method="POST" style="display:inline;">
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
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Skill</h1>
    <form action="{{ route('admin.skill.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Skill Name</label>
            <input type="text" name="name" value="{{ $skill->name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="level">Level (1-100)</label>
            <input type="number" name="level" value="{{ $skill->level }}" class="form-control" min="1" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
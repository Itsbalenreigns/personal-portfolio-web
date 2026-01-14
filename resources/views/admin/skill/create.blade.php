@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Skill</h1>
    <form action="{{ route('admin.skill.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Skill Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="level">Level (1-100)</label>
            <input type="number" name="level" class="form-control" min="1" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
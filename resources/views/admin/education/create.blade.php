@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Education</h1>
    <form action="{{ route('admin.education.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="degree">Degree</label>
            <input type="text" name="degree" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="institution">Institution</label>
            <input type="text" name="institution" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year_start">Year Start</label>
            <input type="number" name="year_start" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year_end">Year End (leave blank if current)</label>
            <input type="number" name="year_end" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
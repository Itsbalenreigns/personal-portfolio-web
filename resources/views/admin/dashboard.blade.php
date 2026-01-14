@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('admin.about.index') }}" class="btn btn-primary btn-block">Manage About</a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('admin.education.index') }}" class="btn btn-primary btn-block">Manage Education</a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('admin.skill.index') }}" class="btn btn-primary btn-block">Manage Skills</a>
        </div>
        <div class="col-md-3">
            <a href="{{ route('admin.project.index') }}" class="btn btn-primary btn-block">Manage Projects</a>
        </div>
    </div>
</div>
@endsection
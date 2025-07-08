@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Project</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" name="title" id="title" class="form-control"
                value="{{ old('title', $project->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" name="role" id="role" class="form-control"
                value="{{ old('role', $project->role) }}" required>
        </div>

        <div class="mb-3">
            <label for="technologies" class="form-label">Technologies Used</label>
            <input type="text" name="technologies" id="technologies" class="form-control"
                value="{{ old('technologies', $project->technologies) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="team_size" class="form-label">Team Size</label>
            <input type="number" name="team_size" id="team_size" class="form-control"
                value="{{ old('team_size', $project->team_size) }}" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control"
                value="{{ old('duration', $project->duration) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>
@endsection

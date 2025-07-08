@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Project</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Your Role</label>
            <input type="text" name="role" id="role" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="technologies" class="form-label">Technologies Used (comma-separated)</label>
            <input type="text" name="technologies" id="technologies" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="team_size" class="form-label">Team Size</label>
            <input type="number" name="team_size" id="team_size" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration (e.g., "2 Weeks", "1 Month")</label>
            <input type="text" name="duration" id="duration" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Project</button>
    </form>
</div>
@endsection

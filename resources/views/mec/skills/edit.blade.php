@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Skills & Interests</h2>

    <form action="{{ route('skills.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="technical">Technical Skills</label>
            <textarea name="technical" id="technical" class="form-control" rows="3" required>{{ old('technical', $skill->technical) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="soft">Soft Skills</label>
            <textarea name="soft" id="soft" class="form-control" rows="3" required>{{ old('soft', $skill->soft) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="interests">Interests</label>
            <textarea name="interests" id="interests" class="form-control" rows="3" required>{{ old('interests', $skill->interests) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Skills</button>
        <a href="{{ route('mec.landing') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

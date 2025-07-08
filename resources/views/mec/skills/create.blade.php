@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $skill ? 'Edit' : 'Add' }} Skills & Interests</h2>

    <form action="{{ $skill ? route('skills.update') : route('skills.store') }}" method="POST">
        @csrf
        @if ($skill)
            @method('PUT')
        @endif

        <div class="form-group mb-3">
            <label for="technical">Technical Skills</label>
            <textarea name="technical" class="form-control" required>{{ old('technical', $skill->technical ?? '') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="soft">Soft Skills</label>
            <textarea name="soft" class="form-control" required>{{ old('soft', $skill->soft ?? '') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="interests">Interests</label>
            <textarea name="interests" class="form-control" required>{{ old('interests', $skill->interests ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">{{ $skill ? 'Update' : 'Save' }}</button>
    </form>
</div>
@endsection

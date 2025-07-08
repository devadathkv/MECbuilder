@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Education</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('education.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="degree" class="form-label">Degree</label>
            <input type="text" name="degree" id="degree" class="form-control"
                value="{{ old('degree', $education->degree) }}" required>
        </div>

        <div class="mb-3">
            <label for="institution" class="form-label">Institution</label>
            <input type="text" name="institution" id="institution" class="form-control"
                value="{{ old('institution', $education->institution) }}" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year of Completion</label>
            <input type="number" name="year" id="year" class="form-control"
                value="{{ old('year', $education->year) }}" min="1900" max="{{ now()->year }}" required>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade/Percentage</label>
            <input type="text" name="grade" id="grade" class="form-control"
                value="{{ old('grade', $education->grade) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Education</button>
    </form>
</div>
@endsection

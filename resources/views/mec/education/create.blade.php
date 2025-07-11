@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Education</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('education.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="institution" class="form-label">Institution :</label>
                <input type="text" name="institution" id="institution" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="board" class="form-label">Board/University :</label>
                <input type="text" name="board" id="board" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="degree" class="form-label">Degree/Course :</label>
                <input type="text" name="degree" id="degree" class="form-control" required>
            </div>


            <div class="mb-3">
                <label for="year" class="form-label">Year of Completion :</label>
                <input type="number" name="year" id="year" class="form-control" min="1900"
                    max="{{ now()->year }}" required>
            </div>

            <div class="mb-3">
                <label for="grade" class="form-label">Grade/Percentage :</label>
                <input type="text" name="grade" id="grade" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Education</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <style>
        .form-container {
            max-width: 700px;
            margin: 40px auto;
            background-color: #0d1117;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.05);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #c9d1d9;
        }

        .form-container h2 {
            margin-bottom: 30px;
            color: #58a6ff;
            text-align: center;
            border-bottom: 2px solid #58a6ff;
            padding-bottom: 10px;
        }

        .form-label {
            font-weight: bold;
            color: #c9d1d9;
        }

        .form-control {
            background-color: #161b22;
            color: #c9d1d9;
            border: 1px solid #30363d;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 16px;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #58a6ff;
            background-color: #0d1117;
            box-shadow: 0 0 0 0.2rem rgba(88, 166, 255, 0.25);
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #238636;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2ea043;
        }

        .alert-danger {
            background-color: #3c0d0d;
            color: #f85149;
            border: 1px solid #f85149;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 20px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #8b949e;
        }
    </style>

    <div class="form-container">
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
                    value="{{ old('degree', $education->degree) }}" placeholder="Enter degree or course" required>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label">Institution</label>
                <input type="text" name="institution" id="institution" class="form-control"
                    value="{{ old('institution', $education->institution) }}" placeholder="Enter institution name" required>
            </div>

            <div class="mb-3">
                <label for="board" class="form-label">Board/University</label>
                <input type="text" name="board" id="board" class="form-control"
                    value="{{ old('board', $education->board) }}" placeholder="Enter board/university name" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year of Completion</label>
                <input type="number" name="year" id="year" class="form-control"
                    value="{{ old('year', $education->year) }}" min="1900" max="{{ now()->year }}" placeholder="e.g., 2025" required>
            </div>

            <div class="mb-3">
                <label for="grade" class="form-label">Grade/Percentage</label>
                <input type="text" name="grade" id="grade" class="form-control"
                    value="{{ old('grade', $education->grade) }}" placeholder="e.g., 85% or 8.5 CGPA" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Education</button>
        </form>
    </div>
@endsection

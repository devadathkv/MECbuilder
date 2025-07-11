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

        .btn-primary {
            background-color: #238636;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #2ea043;
        }

        /* Dark mode adjustments for Trix editor */
        .trix-content {
            background-color: #161b22;
            color: #c9d1d9;
            border: 1px solid #30363d;
            border-radius: 8px;
            padding: 10px;
        }

        .trix-button-group button {
            background-color: #30363d;
            color: #c9d1d9;
        }

        .trix-button-group button.trix-active {
            background-color: #58a6ff;
            color: #ffffff;
        }

        .trix-toolbar {
            background-color: #0d1117;
            border: 1px solid #30363d;
        }
    </style>

    {{-- Trix Editor CSS & JS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.js"></script>

    <div class="form-container">
        <h2>Edit Course</h2>

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Course / Certification</label>
                <input id="title" type="hidden" name="title" value="{{ old('title', $course->title) }}">
                <trix-editor input="title" class="trix-content"></trix-editor>
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-primary">Update Course</button>
        </form>
    </div>
@endsection

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
        <h2>Edit Reference</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('references.update', $reference->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $reference->name) }}" placeholder="Enter full name" required autofocus>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control"
                    value="{{ old('email', $reference->email) }}" placeholder="Enter email address" required>
            </div>

            <div class="mb-3">
                <label for="institution" class="form-label">Institution</label>
                <input type="text" name="institution" id="institution" class="form-control"
                    value="{{ old('institution', $reference->institution) }}" placeholder="Enter institution" required>
            </div>

            <button type="submit" class="btn-primary">Update Reference</button>
        </form>
    </div>
@endsection

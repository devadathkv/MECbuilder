@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit header info</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('header.update') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" id="name" class="form-control" 
               value="{{ old('name', $header->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control"
               value="{{ old('email', $header->email) }}" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" id="phone" class="form-control"
               value="{{ old('phone', $header->phone) }}" required>
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control"
               value="{{ old('dob', $header->dob) }}" required>
    </div>

    <div class="mb-3">
        <label for="linkedin" class="form-label">LinkedIn Profile Link</label>
        <input type="url" name="linkedin" id="linkedin" class="form-control"
               value="{{ old('linkedin', $header->linkedin) }}" required>
    </div>

    <div class="mb-3">
        <label for="github" class="form-label">GitHub Profile Link</label>
        <input type="url" name="github" id="github" class="form-control"
               value="{{ old('github', $header->github) }}" required>
    </div>

    <div class="mb-3">
        <label for="portfolio" class="form-label">Portfolio Link</label>
        <input type="url" name="portfolio" id="portfolio" class="form-control"
               value="{{ old('portfolio', $header->portfolio) }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Header Information</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('header.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="linkedin" class="form-label">LinkedIn Profile Link</label>
            <input type="url" name="linkedin" id="linkedin" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="github" class="form-label">GitHub Profile Link</label>
            <input type="url" name="github" id="github" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="portfolio" class="form-label">Portfolio Link</label>
            <input type="url" name="portfolio" id="portfolio" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Save Header</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Course</h2>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Trix Editor CSS & JS --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.js"></script>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Course / Certification</label>
                <input id="title" type="hidden" name="title">
                <trix-editor input="title"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Save</button>
        </form>
    </div>
@endsection

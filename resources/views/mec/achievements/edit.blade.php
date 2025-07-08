@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Achievement</h2>
    <form action="{{ route('achievements.update', $achievement->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Achievement</label>
            <input id="title" type="hidden" name="title" value="{{ old('title', $achievement->title) }}">
            <trix-editor input="title"></trix-editor>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.js"></script>
@endpush

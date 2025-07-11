@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 max-w-lg bg-gray-900 text-white rounded-2xl shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-400">Edit Achievement</h2>

        <form action="{{ route('achievements.update', $achievement->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title" class="block text-sm font-semibold text-gray-300 mb-2">Achievement</label>
                <input id="title" type="hidden" name="title" value="{{ old('title', $achievement->title) }}">
                <trix-editor input="title"
                    class="trix-content bg-gray-800 text-gray-200 border border-gray-700 rounded-lg focus:ring focus:ring-blue-500"></trix-editor>
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Update
            </button>
        </form>
    </div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.js"></script>

    <style>
        /* Dark mode adjustments for Trix editor */
        .trix-content {
            background-color: #1f2937;
            /* gray-800 */
            color: #e5e7eb;
            /* gray-200 */
        }

        .trix-button-group button {
            background-color: #374151;
            /* gray-700 */
            color: #f3f4f6;
            /* gray-100 */
        }

        .trix-button-group button.trix-active {
            background-color: #2563eb;
            /* blue-600 */
            color: white;
        }
    </style>
@endpush

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 max-w-lg bg-gray-900 text-white rounded-2xl shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-4 text-center text-blue-400">Add References</h2>

        @if ($errors->any())
            <div class="bg-red-600 text-white rounded-lg p-4 mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('references.store') }}" method="POST" class="space-y-4">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-300 mb-2">Full Name</label>
                <input type="text" name="name" id="name"
                    class="w-full bg-gray-800 text-gray-200 border border-gray-700 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-300 mb-2">Email Address</label>
                <input type="email" name="email" id="email"
                    class="w-full bg-gray-800 text-gray-200 border border-gray-700 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="institution" class="block text-sm font-semibold text-gray-300 mb-2">Institution</label>
                <input type="text" name="institution" id="institution"
                    class="w-full bg-gray-800 text-gray-200 border border-gray-700 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Save References
            </button>
        </form>
    </div>
@endsection

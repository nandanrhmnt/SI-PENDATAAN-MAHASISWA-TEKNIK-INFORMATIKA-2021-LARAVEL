@extends('layouts.app')

@section('content')
    <div class="bg-blue-100 p-4">
        <div class="container mx-auto p-4">
            <div class="bg-white p-6 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Add Student</h2>
                <form method="POST" action="{{ route('mahasiswa.store') }}">
                    @csrf
                    <!-- Form fields for adding a new student -->
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Student</button>
                </form>
            </div>
        </div>
    </div>
@endsection

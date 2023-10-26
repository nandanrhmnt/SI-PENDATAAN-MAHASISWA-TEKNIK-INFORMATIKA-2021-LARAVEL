@extends('layouts.app')

@section('content')
    <div class="bg-blue-100 p-4">
        <div class="container mx-auto p-4">
            <h2 class="text-2xl font-semibold">Student Details</h2>
            
            <div class="mt-4">
                <p><strong>Nama:</strong> {{ $student->nama }}</p>
                <p><strong>NIM:</strong> {{ $student->NIM }}</p>
                <p><strong>Alamat:</strong> {{ $student->alamat }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $student->tanggal_lahir }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $student->jenis_kelamin }}</p>
                <p><strong>Agama:</strong> {{ $student->agama }}</p>
            </div>
        </div>
    </div>
@endsection

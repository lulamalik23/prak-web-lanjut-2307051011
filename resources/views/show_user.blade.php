@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100" style="background-color:rgb(240, 149, 155);">
    <div class="card text-center p-4" style="width: 400px; border-radius: 40px; background-color: #ffe6f0;">
        
        {{-- Foto Profil --}}
        @if ($user->foto)
            <img src="{{ asset($user->foto) }}" 
                 alt="Foto {{ $user->nama }}" 
                 class="rounded-circle mx-auto mb-4"
                 style="width: 130px; height: 130px; object-fit: cover; border: 4px solid white;">
        @else
            <img src="{{ asset('images/loopie.jpg') }}" 
                 alt="Foto Default" 
                 class="rounded-circle mx-auto mb-4"
                 style="width: 130px; height: 130px; object-fit: cover; border: 4px solid white;">
        @endif
        
        <h5 class="mb-4 text-muted">Detail Pengguna</h5>

        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Nama:</strong> {{ $user->nama }}</p>
        <p><strong>NPM:</strong> {{ $user->npm }}</p>
        <p><strong>Kelas ID:</strong> {{ $user->kelas_id }}</p>

        <a href="{{ route('user.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 mt-4 inline-block rounded">Kembali</a>

    </div>
</div>
@endsection

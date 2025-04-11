@extends('layouts.app')

@section('content')

    {{-- Tambahkan Judul Halaman --}}
    <h2 class="text-2xl font-bold text-center mb-4 text-pink-700">{{ $title ?? 'Tambah User' }}</h2>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div>
            <label for="nama" class="block font-medium text-pink-800">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" 
                class="w-full border border-pink-400 bg-white rounded-lg p-2 mt-1 focus:ring-2 focus:ring-pink-500">
                @foreach($errors->get('nama') as $msg)
                <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
        </div>

        <div class="mt-4">
            <label for="npm" class="block font-medium text-pink-800">NPM</label>
            <input type="text" id="npm" name="npm" value="{{ old('npm') }}" 
                class="w-full border border-pink-400 bg-white rounded-lg p-2 mt-1 focus:ring-2 focus:ring-pink-500">
                @foreach($errors->get('npm') as $msg)
                <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
        </div>

        <div class="mt-4">
            <label for="kelas" class="block font-medium text-pink-800">Kelas</label>
            <select id="kelas" name="kelas_id" class="w-full border border-pink-400 bg-white rounded-lg p-2 mt-1 focus:ring-2 focus:ring-pink-500">
                <option value="">-- Pilih Kelas --</option>
                    @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
        </div>

        <button type="submit" class="w-full bg-pink-500 text-white font-semibold py-2 rounded-lg hover:bg-pink-600 transition mt-4">
            Submit
        </button>
    </form>

@endsection

@extends('layouts.app')

@section('content')

<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md border border-gray-200">
    <h2 class="text-3xl font-bold text-center text-pink-600 mb-6">Edit User</h2>


        <!-- FORM ACTION SUDAH DIPERBAIKI -->
        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="nama" class="block font-semibold text-gray-700">Nama :</label>
                <input type="text" id="nama" name="nama"
                    value="{{ old('nama', $user->nama) }}"
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500 transition-shadow shadow-sm">

                @foreach ($errors->get('nama') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div>
                <label for="npm" class="block font-semibold text-gray-700">NPM :</label>
                <input type="text" id="npm" name="npm"
                    value="{{ old('npm', $user->npm) }}"
                    class="w-full border border-gray-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500 transition-shadow shadow-sm">

                @foreach ($errors->get('npm') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div>
                <label for="kelas_id" class="block font-semibold text-gray-700">Kelas:</label>
                <select name="kelas_id" id="kelas_id"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm bg-white text-gray-700 focus:ring-blue-500 focus:border-blue-500 focus:outline-none transition">
                    
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}"
                            {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>

                @foreach ($errors->get('kelas_id') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <div class="mt-4">
                <label for="foto" class="block font-semibold text-gray-700">Foto Baru (Opsional):</label>
                <input type="file" id="foto" name="foto" class="block w-full text-gray-700 mt-1">

                @if ($user->foto)
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Foto lama:</p>
                        <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}" class="w-24 h-24 object-cover rounded border border-gray-300">
                    </div>
                @endif

                @foreach ($errors->get('foto') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>

            <button type="submit"
    class="mt-6 w-full bg-pink-500 text-white font-semibold py-2 rounded-lg hover:bg-pink-600 transition-all duration-200 transform hover:scale-105 shadow-md">
    Simpan Perubahan
</button>

            </button>
        </form>
    </div>

@endsection

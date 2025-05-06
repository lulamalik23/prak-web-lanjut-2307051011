@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-10">

            {{-- Judul & Tombol Tambah --}}
            <div class="text-center mb-6">
            <h2 class="text-3xl font-extrabold mt-6 mb-6">Daftar Pengguna</h2>


                <a href="{{ route('user.create') }}" 
   class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded">
    Tambah Pengguna Baru
</a>
            {{-- Flash Message --}}
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow">
    <div class="card-header bg-white text-Black text-center">
        <h5 class="mt-5 mb-5">List User</h5>
    </div>
    <div class="card-body">
        <p class="text-muted text-center mb-4">
            Berikut adalah daftar pengguna yang terdaftar dalam sistem.
        </p>
    </div>
</div>
    <div class="table-responsive">
                        <table class="table table-bordered text-center mt-3">
                            <thead class="bg-danger text-Black">
                                <tr>
                                    <th style="width: 50px;">ID</th>
                                    <th>Nama</th>
                                    <th>NPM</th>
                                    <th>Kelas</th>
                                    <th>Foto</th>
                                    <th style="width: 200px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->npm }}</td>
                                        <td>{{ $user->kelas_id }}</td>
                                        <td>
                                            @if ($user->foto)
                                                <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}"
                                                     class="rounded-circle"
                                                     style="width: 40px; height: 40px; object-fit: cover;">
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                        <a href="{{ route('user.show', $user->id) }}" 
   class="bg-yellow-500 text-white text-xs px-2 py-1 rounded hover:bg-yellow-600 transition mb-2 inline-block">
    Detail
</a>


                                            <a href="{{ route('user.edit', $user->id) }}" 
   class="bg-cyan-500 text-white text-xs px-2 py-1 rounded hover:bg-cyan-600 transition mb-2 inline-block">
    Edit
</a>

                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
    class="bg-red-500 text-white text-xs px-2 py-1 rounded hover:bg-red-600 transition"
    onclick="return confirm('Yakin ingin menghapus data ini?')">
    Hapus
</button>

                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Tidak ada data pengguna.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

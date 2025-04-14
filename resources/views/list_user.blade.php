@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-xl-11">
        {{-- Judul di Tengah --}}
            <div class="text-center mb-4">
                <h2 class="mb-3">Daftar Pengguna</h2>
                <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Pengguna Baru</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">List User</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center mb-4">Berikut adalah daftar pengguna yang terdaftar dalam sistem.</p>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle text-center w-100">
                            <thead class="table-dark">
                                <tr>
                                    <th width="50">ID</th>
                                    <th>Nama</th>
                                    <th>NPM</th>
                                    <th>Kelas</th>
                                    <th>Foto</th>
                                    <th width="100">Aksi</th>
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
                                                <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                                            @else
                                                <span class="text-muted fst-italic">Tidak ada foto</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning btn-sm">Detail</a>
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

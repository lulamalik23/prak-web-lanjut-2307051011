@extends('layouts.app')

@section('content')

<!-- Basic Tables start -->
<section class="d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="bg-gradient-to-r from-pink-300 to-red-200 p-6 rounded-xl shadow-lg w-full max-w-lg mx-auto">
            <h2 class="text-center text-2xl font-bold text-gray-800">List User</h2>
            <p class="text-center text-gray-700 mb-4">Berikut adalah daftar pengguna yang terdaftar dalam sistem.</p>

            <div class="table-responsive">
                <table class="table table-bordered text-center border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-red-400 text-white">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach ($users as $user)
    <tr class="bg-white hover:bg-red-100 transition">
        <td class="text-gray-800">{{ $user->id }}</td>
        <td class="text-gray-800">{{ $user->nama }}</td>
        <td class="text-gray-800">{{ $user->npm }}</td>
        <td class="text-gray-800">{{ $user->nama_kelas }}</td>
        <td></td> <!-- Kolom aksi kosong -->
    </tr>
    @endforeach
</tbody>

                </table>
            </div>

        </div>
    </div>
</section>
<!-- Basic Tables end -->

@endsection

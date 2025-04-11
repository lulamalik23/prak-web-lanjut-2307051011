<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    // 🔹 Inisialisasi model dalam __construct
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // 🔹 Menampilkan form tambah user
    public function create()
    {
        $kelas = $this->kelasModel->getKelas(); // Menggunakan properti kelasModel

        return view('create_user', [
            'title' => 'Create User',
            'kelas' => $kelas,
        ]);
    }

    // 🔹 Menyimpan user baru dan redirect ke halaman /users
    public function store(UserRequest $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/users')->with('success', 'User berhasil ditambahkan!');
    }

    // 🔹 Menampilkan daftar user
    public function index()
    {
        $data = [
            'title' => 'List User', // 🔹 Judul halaman
            'users' => $this->userModel->getUser(), // 🔹 Ambil data user dengan relasi kelas
        ];

        return view('list_user', $data);
    }
}

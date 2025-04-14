<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct(UserModel $userModel, Kelas $kelasModel)
    {
        $this->userModel = $userModel;
        $this->kelasModel = $kelasModel;
    }

    // 🔸 Menampilkan halaman detail user berdasarkan ID
    public function show($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];

        return view('profile', $data);
    }

    // 🔸 Menampilkan daftar user
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    // 🔸 Menampilkan form untuk membuat user baru
    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        return view('create_user', [
            'title' => 'Create User',
            'kelas' => $kelas,
        ]);
    }

    // 🔸 Menyimpan data user ke database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFile = time() . '_' . $foto->getClientOriginalName(); // Hindari nama duplikat
            $foto->move(public_path('upload/img'), $namaFile);
            $fotoPath = 'upload/img/' . $namaFile; // Simpan path yang relatif dari root public
        }

        // Simpan data user
        $this->userModel->create([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }
}

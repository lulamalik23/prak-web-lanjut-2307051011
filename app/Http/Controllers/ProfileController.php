<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Menampilkan halaman profile dengan parameter opsional.
     * 
     * @param string|null $nama
     * @param string|null $kelas
     * @param string|null $npm
     * @return \Illuminate\View\View
     */
    public function profile($nama = null, $kelas = null, $npm = null)
    {
        return view('profile', compact('nama', 'kelas', 'npm'));
    }

    /**
     * Menampilkan halaman profile tanpa parameter.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('profile');
    }
}

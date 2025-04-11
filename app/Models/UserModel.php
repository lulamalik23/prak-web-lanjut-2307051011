<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user'; // Pastikan sesuai dengan tabel di database
    protected $fillable = ['nama', 'npm', 'kelas_id'];

    // 🔹 Relasi ke tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // 🔹 Method untuk menyimpan user ke database
    public function saveUser($data)
    {
        return self::create($data);
    }

    // 🔹 Method untuk mengambil daftar user dengan join ke tabel kelas
    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}

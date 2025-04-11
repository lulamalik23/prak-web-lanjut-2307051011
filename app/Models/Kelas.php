<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Tambahkan ini agar tidak error

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // Melindungi kolom id agar tidak bisa diisi secara massal
    protected $table = 'kelas'; // Menentukan nama tabel di database

    /**
     * Relasi ke User (Satu Kelas memiliki banyak User)
     */
    public function users()
    {
        return $this->hasMany(User::class, 'kelas_id');
    }

    /**
     * Mengambil semua data kelas
     */
    public static function getKelas()
    {
        return self::all();
    }

    /**
     * Method tambahan dari gambar yang Anda berikan
     */
    public function getAllKelas()
    {
        return $this->all();
    }
}

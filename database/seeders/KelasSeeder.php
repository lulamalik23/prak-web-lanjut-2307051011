<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $data = ['A', 'B', 'C', 'D', 'D3',];

        foreach ($data as $kelas) {
            Kelas::create([
                'nama_kelas' => $kelas,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use File;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/kelas.json');
        $kelas = json_decode($json);

        foreach($kelas as $kls)
        {
            Kelas::create([
                'id_kelas' => $kls->id_kelas,
                'nomor_kelas' => $kls->nomor_kelas,
                'prodi_kelas' => $kls->prodi_kelas,
                'url_kelas' => $kls->url_kelas,
            ]);
        }
    }
}

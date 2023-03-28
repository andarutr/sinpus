<?php

namespace Database\Seeders;

use File;
use App\Models\StatusBuku;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/status_buku.json');
        $status_buku = json_decode($json);

        foreach($status_buku as $stbk)
        {
            StatusBuku::create([
                'id_statusbuku' => $stbk->id_statusbuku,
                'nm_statusbuku' => $stbk->nm_statusbuku,
            ]);
        }
    }
}

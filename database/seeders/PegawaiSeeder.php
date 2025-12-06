<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pegawai::create([
        //     'nama' => 'Patrick',
        //     'status' => 'menikah',
        // ]);

        Pegawai::factory()->count(5)->create();
    }
}

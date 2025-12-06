<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'nama' => 'Laptop Asus ROG',
        //     'harga' => 2500000,
        //     'stok' => 10,
        // ]);
        Product::factory()->count(5)->create();
    }
}

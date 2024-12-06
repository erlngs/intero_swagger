<?php

namespace Database\Seeders;

use App\Models\Product;  // Pastikan ini ada
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();

        Product::insert([
            ['name' => 'Jersey Vintage', 'description' => 'Jersey vintage Langka gacor', 'price' => 80000000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kacamata', 'description' => 'Kacamata Langka gacor', 'price' => 34000000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Baju Timnas', 'description' => 'Ori', 'price' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Erlang', 'description' => 'Kacamata Langka gacor', 'price' => 34000000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

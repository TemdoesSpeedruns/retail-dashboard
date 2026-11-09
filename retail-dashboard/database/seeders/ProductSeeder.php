<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('producten')->insert([
            ['created_at' => $now, 'updated_at' => $now],
            ['created_at' => $now, 'updated_at' => $now],
            ['created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

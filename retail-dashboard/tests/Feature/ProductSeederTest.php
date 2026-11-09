<?php

namespace Tests\Feature;

use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ProductSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_seeds_three_products_with_timestamps(): void
    {
        $this->seed(ProductSeeder::class);

        $this->assertDatabaseCount('producten', 3);
        $this->assertDatabaseHas('producten', ['id' => 1]);
        $this->assertNotNull(DB::table('producten')->where('id', 1)->value('created_at'));
    }

    public function test_database_seeder_runs_the_product_seeder(): void
    {
        $this->seed();

        $this->assertDatabaseCount('producten', 3);
    }
}

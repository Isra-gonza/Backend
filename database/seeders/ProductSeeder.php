<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Provider;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $providers=Provider::all();
        $providers->each(function ($provider) {
            Product::factory()->count(2)->create(['provider_id' => $provider->id]);
        });
    }
}

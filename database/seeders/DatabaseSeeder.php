<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderLineSeeder::class);
    }
}

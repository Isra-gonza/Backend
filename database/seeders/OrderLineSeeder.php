<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Product;

class OrderLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_lines')->delete();

        $orders=Order::all();
        $orders->each(function ($order) {
           OrderLine::factory()->count(5)->create(['order_id' => $order->id, 'product_id' => Product::inRandomOrder()->first()]);
        });
    }
}

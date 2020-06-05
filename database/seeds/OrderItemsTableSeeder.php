<?php

use Illuminate\Database\Seeder;
use App\OrderItems;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItems::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'price' => 9999,
        ]);

        OrderItems::create([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 50,
        ]);
    }
}

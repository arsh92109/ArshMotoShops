<?php

use Illuminate\Database\Seeder;
use App\Order;
use Carbon\Carbon;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'date' => Carbon::today(),
            'address' => 'A-3/138-139',
            'status' => 1,
        ]);

        Order::create([
            'user_id' => 2,
            'date' => Carbon::today(),
            'address' => 'Some Where',
            'status' => 1,
        ]);
    }
}

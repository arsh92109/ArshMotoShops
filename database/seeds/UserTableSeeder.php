<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Arsh Kumar',
            'email' => 'arshkumar92109@gmail.com',
            'password' => '$2y$10$OzUiyu1wpLYPwzqCQ/N4fufJM9KtZIIP6Rcf544p5gUIhqI1gzU2y',
        ]);

        User::create([
            'name' => 'Arsh',
            'email' => 'arsh@mail.com',
            'password' => '$2y$10$7mV3GBRQ7CaGpJZYzZAGwubEbWPuzlfnbj/FEqD.6Q4auHrSSzq.O',
        ]);
    }
}

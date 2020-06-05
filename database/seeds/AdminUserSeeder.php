<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
            'name' => 'arsh',
            'email' => 'arshkumar92109@gmail.com',
            'password' => '$2y$10$OzUiyu1wpLYPwzqCQ/N4fufJM9KtZIIP6Rcf544p5gUIhqI1gzU2y',
            
        ]);
    }
}

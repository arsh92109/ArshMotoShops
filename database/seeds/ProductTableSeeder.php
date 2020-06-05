<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Bugatti',
            'price' => '9999',
            'description' => 'Flying Beast',
            'image' => 'Bhuggati.jpg',
        ]);

        Product::create([
            'name' => '	Citroen',
            'price' => '50',
            'description' => 'Spirit of avant-garde',
            'image' => 'citroen.jpg',
        ]);

        Product::create([
            'name' => 'Chevrolet',
            'price' => '1000',
            'description' => 'Chevy runs deep',
            'image' => 'Cheverlot.jpg',
        ]);

        Product::create([
            'name' => 'Mustang',
            'price' => '5000',
            'description' => 'The future of exhilaration',
            'image' => 'Mustang.jpg',
        ]);

        Product::create([
            'name' => 'Royal Enfield',
            'price' => '1500',
            'description' => 'Made like a gun, goes like a bullet',
            'image' => 'bike.jpg',
        ]);
    }
}

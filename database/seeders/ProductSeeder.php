<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "Men's Polo Shirt",
                'description' => 'Kaos Polo Lengan Pendek',
                'price' => 150000,
                'category_id' => 1,
                'stock_quantity' => 100,
                'discount' => 0,
                'image' => 'mens-polo-shirt-short-sleeve.jpg',
                'slug' => 'mens-polo-shirt-short-sleeve',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Men's Jeans",
                'description' => 'Celana Jeans Biru',
                'price' => 250000,
                'category_id' => 1, // Pakaian Pria
                'stock_quantity' => 80,
                'discount' => 0,
                'image' => 'mens-jeans-blue-denim.jpg',
                'slug' => 'mens-jeans-blue-denim',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Men's Formal Shirt",
                'description' => 'Kemeja Lengan Panjang',
                'price' => 200000,
                'category_id' => 1, // Pakaian Pria
                'stock_quantity' => 50,
                'discount' => 0,
                'image' => 'mens-formal-shirt-long-sleeve.jpg',
                'slug' => 'mens-formal-shirt-long-sleeve',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Men's Leather Jacket",
                'description' => 'Jaket Kulit Hitam',
                'price' => 500000,
                'category_id' => 1, // Pakaian Pria
                'stock_quantity' => 30,
                'discount' => 0,
                'image' => 'mens-leather-jacket-black.jpg',
                'slug' => 'mens-leather-jacket-black',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Men's Hoodie",
                'description' => 'Hoodie Lengan Panjang',
                'price' => 180000,
                'category_id' => 1, // Pakaian Pria
                'stock_quantity' => 60,
                'discount' => 0,
                'image' => 'mens-hoodie-long-sleeve.jpg',
                'slug' => 'mens-hoodie-long-sleeve',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

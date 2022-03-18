<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Fruit Tea',
            'price' => 3.11,
            'description' => 'Forrest fruits tea',
            'image' => 'https://images.unsplash.com/photo-1592099759599-24b131b8e824?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1025&q=80'
        ]);
        Product::create([
            'name' => 'Strawberries',
            'price' => 5,
            'description' => 'A box of fresh strawberries',
            'image' => 'https://images.unsplash.com/photo-1543158181-e6f9f6712055?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
        ]);
        Product::create([
            'name' => 'Coffee',
            'price' => 11.23,
            'description' => 'Americano',
            'image' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1337&q=80'
        ]);
    }
}

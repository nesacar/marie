<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Product::class, 200)->create()->each(function($product) {
            $product->category()->attach(rand(1,3));
        });
    }
}

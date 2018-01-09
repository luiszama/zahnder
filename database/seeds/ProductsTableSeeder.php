<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
      factory(Product::class, 80)->create();
    }
}

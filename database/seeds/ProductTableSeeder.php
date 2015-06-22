<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the category table seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        factory(CodeCommerce\Product::class, 10)->create();
    }
}

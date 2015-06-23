<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the category table seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        factory(CodeCommerce\Category::class, 25)->create();
    }
}

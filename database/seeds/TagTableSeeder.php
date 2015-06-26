<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TagTableSeeder extends Seeder
{
    /**
     * Run the category table seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();
        factory(CodeCommerce\Tag::class, 25)->create();
    }
}

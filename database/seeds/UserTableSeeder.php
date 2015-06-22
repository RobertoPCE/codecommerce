<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the category table seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(CodeCommerce\User::class, 10)->create();
    }
}

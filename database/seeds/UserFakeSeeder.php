<?php

use Illuminate\Database\Seeder;

class UserFakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 9)->create();

    }
}

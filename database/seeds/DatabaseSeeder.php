<?php

use Illuminate\Database\Seeder;
use App\Talk;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Talk::class ,100)->create();
    }
}

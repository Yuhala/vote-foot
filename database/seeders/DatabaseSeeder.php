<?php

use Illuminate\Database\Seeder;

use Database\Seeders\PlayerSeeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Call all seeder class here
         */
        $this->call(ProductSeeder::class);
        $this->call(PlayerSeeder::class);
    }
}

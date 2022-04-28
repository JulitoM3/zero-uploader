<?php

use Database\Seeders\OrdenesReposicion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \Database\Seeders\compranet_18::class,
            \Database\Seeders\compranet_19::class,
            \Database\Seeders\compranet_20::class,
            \Database\Seeders\compranet_21::class,
            //\Database\Seeders\compranet_22::class
            //\Database\Seeders\abastos::class,
            OrdenesReposicion::class
        ]);
    }
}

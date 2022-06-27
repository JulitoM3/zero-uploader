<?php

use Database\Seeders\abastos;
use Database\Seeders\Altas;
use Database\Seeders\compranet_21;
use Database\Seeders\compranet_22;
use Database\Seeders\divisionContratos;
use Database\Seeders\NotasCredito;
use Database\Seeders\OrdenesReposicion;
use Database\Seeders\Pagos;
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
            //\Database\Seeders\compranet_18::class,
            //\Database\Seeders\compranet_19::class,
            //\Database\Seeders\compranet_20::class,
            #compranet_21::class,
            //compranet_22::class,
            #OrdenesReposicion::class,
            #Altas::class,
            \Database\Seeders\AltaSaiPrei::class,
            #divisionContratos::class,
            #Pagos::class,
            NotasCredito::class,
            #abastos::class,
        ]);
    }
}

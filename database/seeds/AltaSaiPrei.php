<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class AltaSaiPrei extends CsvSeeder
{

    public function __construct()
    {
        $this->mapping = [
            'clas_ptal_origen',
            'ooad_umae',
            'clas_ptal',
            'nombre_unidad',
            'year',
            'alta_prei',
            'fecha_alta',
            'numero_contrato',
            'numero_proveedor',
            'razon_social',
            'cargo_sai',
            'credito_sai',
            'importe_sai',
            'importe_prei',
            'importe_conciliado',
            'tipo_alta',
            'descripcion_tipo_alta',
            'tipo_error',
            'enviado',
            'fecha_envio',
            'numero_reposicion',
            'fecha_informacion_prei',
            'ui_abono',
            'un_ap',
            'cc_abono',
            'cuenta_abono',
            'ui_cargo',
            'cc_cargo',
            'cuenta_cargo',
            'fecha_carga',
            'asiento',
            'comprobante_prei',
            'fecha_introd_cr',
            'estatus_alta_calculado',
            'comprobante_pago',
            'fecha_programada_pago',
            'estatus_pago_calculado',

            'contrato_id',
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        parent::run();
    }
}

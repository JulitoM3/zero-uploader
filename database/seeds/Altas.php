<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class Altas extends CsvSeeder
{

    public function __construct()
    {
        $this->mapping = [
            'clas_ptal_origen',
            'nombre_ooad',
            'estado_ooad',
            'clas_ptal_origen',
            'fecha_registro',
            'clas_ptal_entrega',
            'nombre_unidad_entrega',
            'tipo_reporte',
            'clas_ptal_entrega',
            'numero_alta_contable',
            'numero_contrato',
            'numero_orden_reposicion',
            'cargo_a',
            'credito_a',
            'descripcion_movimiento',
            'gpo',
            'gen',
            'esp',
            'dif',
            'var',
            'descripcion_articulo',
            'unidad_presentacion',
            'cantidad_presentacion',
            'tipo_presentacion',
            'precio_catalogo_articulos',
            'precio_compra',
            'iva',
            'cantidad_autorizada',
            'cantidad_conteo',
            'importe_articulo_sin_iva',
            'importe_alta_iva',
            'linea_articulo',
            'rfc_proveedor',
            'numero_proveedor',
            'razon_social',
            'numero_licitacion',
            'fecha_hora_recepcion',
            'fecha_hora_entrega',
            'fecha_hora_alta',
            'matricula_usuario_registro',
            'partida_presupuestal',
            'tipo_error',
            'enviado',
            'fecha_envio_pre',
            'contrato_id',
            'orden_id',
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

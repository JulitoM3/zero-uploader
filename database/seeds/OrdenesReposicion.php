<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class OrdenesReposicion extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/csvs/abastos/ordenes.csv';
        $this->tablename = 'ordenes_reposicion';
        $this->truncate = true;
        $this->delimiter = '~';
        $this->header = true;

        $this->mapping = [
            'clas_ptal_origen',
            'nombre_ooad',
            'id_ooad',
            'fecha_actualizacion',
            'clas_ptal_entrega',
            'nombre_unidad_entrega',
            'numero_contrato',
            'numero_licitacion',
            'numero_evento_compranet',
            'tipo_evento',
            'fecha_inicio_contrato',
            'fecha_termino_contrato',
            'monto_minimo_contrato_sin_iva',
            'monto_maximo_contrato_sin_iva',
            'cantidad_minima_piezas',
            'cantidad_maxima_piezas',
            'monto_minimo_clave_sin_iva',
            'monto_maximo_clave_sin_iva',
            'numero_de_solicitud',
            'numero_de_orden_reposicion',
            'origen',
            'gpo',
            'gen',
            'esp',
            'dif',
            'var',
            'descripcion_articulo',
            'unidad_presentacion',
            'cantidad_presentacion',
            'tipo_presentacion',
            'razon_social',
            'rfc_proveedor',
            'numero_proveedor',
            'fecha_expedicion',
            'fecha_www',
            'fecha_confirmacion',
            'fecha_entrega',
            'fecha_atencion',
            'fecha_sello_alta_qr',
            'fecha_cancelacion',
            'fecha_entrega_inicial',
            'fecha_entrega_ampliada',
            'matricula_usuario_amplio',
            'estatus_orden',
            'precio_compra',
            'iva',
            'cantidad_solicitada',
            'cantidad_comprometida',
            'cantidad_atendida',
            'importe_solicitado_iva',
            'importe_comprometido_iva',
            'importe_atendido_iva',
            'importe_solicitado_sin_iva',
            'importe_comprometido_sin_iva',
            'importe_atendido_sin_iva',
            'saldo_contrato',
            'saldo_contrato_porcentaje',
            'fecha_firma_contrato',
            'orden_resguardo',
            'clas_ptal_operador_logistico',
            'nombre_operador_logistico',
            'zona_operador_logistico',
            'cantidad_alta_imss',
            'fecha_alta_imss',
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
        parent::run();
    }
}

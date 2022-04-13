<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class compranet_22 extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/csvs/2022/Contratos2022.csv';
        $this->tablename = 'compranet';
        $this->truncate = true;
        $this->delimiter = ';';
        $this->header = true;
        $this->mapping = [
            'orden',
            'siglas_institucion',
            'institucion',
            'clave_unidad_compradora',
            'nombre_unidad_compradora',
            'respo_unidad_compradora',
            'codigo_expediente',
            'referencia_expediente',
            'clave_cucop',
            'titulo_expediente',
            'plantilla_expediente',
            'fundamento_legal',
            'numero_procedimiento',
            'fecha_fallo',
            'fecha_publicacion',
            'fecha_apertura',
            'tipo_procedimiento',
            'caracter_procedimiento',
            'tipo_contratacion',
            'medio_utilizado_propuestas',
            'codigo_contrato',
            'numero_control_contrato',
            'titulo_contrato',
            'descripcion_contrato',
            'fecha_inicio_contrato',
            'fecha_fin_contrato',
            'importe_contrato',
            'moneda',
            'estatus_contrato',
            'convenio_modificatorio',
            'clave_programa_federal',
            'fecha_firma_contrato',
            'contrato_marco',
            'compra_consolidada',
            'contrato_plurianual',
            'clave_cartera_shcp',
            'folio_rupc',
            'rfc',
            'proveedor_contratista',
            'estratificacion',
            'url_compranet'
        ];
        $this->chunk = 1000;
        /*dd($this->file);*/
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

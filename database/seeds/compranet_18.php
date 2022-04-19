<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class compranet_18 extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/csvs/2018/2018.csv';
        $this->tablename = 'compranet';
        $this->truncate = true;
        $this->delimiter = '~';
        $this->header = true;
        $this->parsers = [
            'importe_contrato' => function ($value) {
                $number = 0;
                if (empty($value)) {
                    return null;
                }
                if (str_contains($value, ",")) {
                    list($int, $decimal) = explode(",", $value);
                    $int = intval($int);
                    $decimal = ("." . $decimal);

                    $number = $int + $decimal;
                } else {
                    $number = intval($value);
                }

                return $number;
            },
        ];
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
            'caracter_procedimiento',
            'tipo_de_contratacion',
            'tipo_procedimiento',
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
            'clave_pais',
            'rfc_verificado_sat',
            'credito_externo',
            'organismo_financiero',
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

<?php

namespace Database\Seeders;

use App\Compranet;
use App\OrdenReposicion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class AltaSaiPrei extends CsvSeeder
{
    private $contrato, $orden;

    public function __construct()
    {
        $this->mapping = [
            'clas_ptal_origen',
            'ooad_umae',
            'clas_ptal',
            'nombre_unidad',
            'year',
            'alta_prei',
            'alta_contable_sai',
            'fecha_alta',
            'numero_documento',
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
        ];

        $this->parsers = [
            'numero_documento' => function ($value) {
                $this->contrato = $value;
                return $value;
            },
            'numero_reposicion' => function ($value) {
                $this->orden = $value;
                return $value;
            },
            'fecha_alta' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_informacion_prei' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_carga' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_introd_cr' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_programada_pago' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'importe_sai' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_prei' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_conciliado' => function ($value) {
                return $this->toDecimal($value);
            },
            'contrato_id' => function ($value) {
                return Compranet::where('numero_control_contrato', $this->contrato)->first(['id']) ?? null;
            },
            'orden_id' => function ($value) {
                return OrdenReposicion::where('numero_de_orden_reposicion', $this->orden)->first(['id']) ?? null;
            }
        ];
    }


    public function toTimeStamp($value)
    {
        if (empty($value)) {
            return $value;
        }


        list($d, $m, $yearTime) = explode("/", $value);

        try {
            list($year, $time) = explode(" ", $yearTime);
        } catch (\Exception $e) {
            $time = "0:0";
        }
        list($h, $min) = explode(":", $time);

        $timeStamp = Carbon::create($year, $m, $d, $h, $min);
        return $timeStamp->toDateTimeString();
    }


    public function toDecimal($value)
    {

        $number = 0;
        if (empty($value)) {
            return null;
        }

        if (str_contains($value, ",")) {
            list($int, $decimal) = explode(",", $value);

            $int = intval(str_replace(".", '', $int));
            $decimal = ("." . $decimal);

            $number = $int + $decimal;
        } else {
            $number = intval(str_replace(".", "", $value));
        }

        return $number;
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

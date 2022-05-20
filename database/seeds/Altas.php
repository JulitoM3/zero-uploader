<?php

namespace Database\Seeders;

use App\Compranet;
use App\OrdenReposicion;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class Altas extends CsvSeeder
{
    public $contrato;
    public $orden;

    public function __construct()
    {
        $this->file = '/database/csvs/abastos/Altas_nacional.csv';
        $this->tablename = 'altas';
        $this->truncate = false;

        $this->delimiter = '~';
        $this->header = true;
        //$this->aliases = ['contrato' => 'contrato_id', 'orden' => 'orden_id'];
        $this->mapping = [
            'clas_ptal_origen',
            'nombre_ooad',
            'estado_ooad',
            'fecha_registro',
            'clas_ptal_entrega',
            'nombre_unidad_entrega',
            'tipo_reporte',
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
            "fecha_hora_recepcion",
            "fecha_hora_entrega",
            "fecha_hora_alta",
            'matricula_usuario_registro',
            'partida_presupuestal',
            'tipo_error',
            'enviado',
            'fecha_envio_prei',

            'contrato_id',
            'orden_id',
        ];
        $this->parsers = [
            'fecha_registro' => function ($value) {
                return $this->toTimeStamp($value);
            },
            "fecha_hora_recepcion" => function ($value) {
                return $this->toTimeStamp($value);
            },
            "fecha_hora_entrega" => function ($value) {
                return $this->toTimeStamp($value);
            },
            "fecha_hora_alta" => function ($value) {
                return $this->toTimeStamp($value);
            },
            'precio_catalogo_articulos' => function ($value) {
                return $this->toDecimal($value);
            },
            'precio_compra' => function ($value) {
                return $this->toDecimal($value);
            },
            'iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_articulo_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_alta_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'numero_contrato' => function ($value) {
                $this->contrato = $value;
                return $value;
            },
            'numero_orden_reposicion' => function ($value) {
                $this->orden = $value;
                return $value;
            },
            'contrato_id' => function ($value) {
                $contrato = Compranet::query()->where('numero_control_contrato', $this->contrato)->first(['id']);
                return $contrato->id ?? null;
            },
            'orden_id' => function ($value) {
                $orden = OrdenReposicion::query()->where('numero_de_orden_reposicion', $this->orden)->first(['id']);
                return $orden->id ?? null;
            }
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
            $number = floatval($value);
        }

        return $number;
    }
}

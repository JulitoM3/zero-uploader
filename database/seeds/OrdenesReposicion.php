<?php

namespace Database\Seeders;

use App\Compranet;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class OrdenesReposicion extends CsvSeeder
{

    private $contrato;

    public function __construct()
    {
        $this->file = '/database/csvs/abastos/ordenes.csv';
        $this->tablename = 'ordenes_reposicion';
        $this->truncate = false;
        $this->delimiter = '~';
        $this->header = true;
        $this->parsers = [
            'numero_contrato' => function ($value) {
                $this->contrato = $value;
                return $value;
            },
            'fecha_inicio_contrato' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_termino_contrato' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_entrega' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_atencion' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_sello_alta_qr' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_firma_contrato' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_actualizacion' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_expedicion' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_www' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_confirmacion' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_cancelacion' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'monto_minimo_contrato_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'monto_maximo_contrato_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'monto_minimo_clave_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'monto_maximo_clave_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'precio_compra' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_solicitado_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_comprometido_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_atendido_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_solicitado_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_comprometido_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_atendido_sin_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'saldo_contrato' => function ($value) {
                return $this->toDecimal($value);
            },
            'saldo_contrato_porcentaje' => function ($value) {
                return $this->toDecimal($value);
            },
            'contrato_id' => function ($value) {
                return Compranet::where('numero_control_contrato', $this->contrato)->first(['id'])->id ?? null;
            }

        ];
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
            'contrato_id'
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
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
        parent::run();

    }
}

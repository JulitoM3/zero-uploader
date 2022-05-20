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
            'fecha_actualizacion' => function ($value) {
                if (empty($value)) {
                    return null;
                }
                #cdd($value);
                list($d, $m, $yearTime) = explode("/", $value);
                list($year, $time) = explode(" ", $yearTime);
                list($h, $min) = explode(":", $time);

                $timeStamp = Carbon::create($year, $m, $d, $h, $min);
                return $timeStamp->toDateTimeString();
            },
            'fecha_inicio_contrato' => function ($value) { //date
                if (empty($value)) {
                    return null;
                }
                return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
            },
            'fecha_termino_contrato' => function ($value) { //date
                if (empty($value)) {
                    return null;
                }
                return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
            },
            'numero_contrato' => function ($value) {
                $this->contrato = $value; //asignamos el valor para attacharlo al id
                return $value;
            },
            'contrato_id' => function ($value) {
                $contratoCompranet = Compranet::where('numero_control_contrato', $this->contrato)->first(['id']);

                return $contratoCompranet->id ?? null;
            },
            'monto_minimo_contrato_sin_iva' => function ($value) { //decimal
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
            },
            'monto_maximo_contrato_sin_iva' => function ($value) {//decimal
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
            },
            'cantidad_minima_piezas' => function ($value) {
                return intval(str_replace(',', '', $value));
            },
            'cantidad_maxima_piezas' => function ($value) {
                return intval(str_replace(',', '', $value));
            },
            'monto_minimo_clave_sin_iva' => function ($value) {
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
            },
            'monto_maximo_clave_sin_iva' => function ($value) { //decimalclear
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
            },
            'cantidad_presentacion' => function ($value) {
                if (empty($value)) {
                    return $value;
                }
                return intval($value);
            },
            'fecha_expedicion' => function ($value) { //timestamp
                if (empty($value)) {
                    return $value;
                }
                list($d, $m, $yearTime) = explode("/", $value);
                list($year, $time) = explode(" ", $yearTime);
                list($h, $min) = explode(":", $time);

                $timeStamp = Carbon::create($year, $m, $d, $h, $min);
                return $timeStamp->toDateTimeString();
            },
            'fecha_www' => function ($value) { //timestamp
                if (empty($value)) {
                    return $value;
                }
                list($d, $m, $yearTime) = explode("/", $value);
                list($year, $time) = explode(" ", $yearTime);
                list($h, $min) = explode(":", $time);

                $timeStamp = Carbon::create($year, $m, $d, $h, $min);
                return $timeStamp->toDateTimeString();
            },
            'fecha_confirmacion' => function ($value) {//timestamp
                if (empty($value)) {
                    return $value;
                }
                list($d, $m, $yearTime) = explode("/", $value);
                list($year, $time) = explode(" ", $yearTime);
                list($h, $min) = explode(":", $time);

                $timeStamp = Carbon::create($year, $m, $d, $h, $min);
                return $timeStamp->toDateTimeString();
            },
            'fecha_entrega' => function ($value) { //date
                if (empty($value)) {
                    return $value;
                }
                return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
            },

            'fecha_atencion' => function ($value) { //date
                if (empty($value)) {
                    return $value;
                }
                return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
            },
            'fecha_sello_alta_qr' => function ($value) {//date
                if (empty($value)) {
                    return $value;
                }
                return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
            },
            'fecha_cancelacion' => function ($value) {
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
            },
            'fecha_entrega_inicial' => function ($value) { //text
                if (empty($value)) {
                    return $value;
                }
                return $value;
            },
            'fecha_entrega_ampliada' => function ($value) { //text
                if (empty($value)) {
                    return $value;
                }
                return $value;
            },
            'precio_compra' => function ($value) { //decimal
                if (empty($value)) {
                    return $value;
                }
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
            },
            'cantidad_solicitada' => function ($value) {
                if (empty($value)) {
                    return $value;
                }
                return floatval(str_replace(",", "", $value));
            },
            'cantidad_comprometida' => function ($value) {
                if (empty($value)) {
                    return $value;
                }
                return floatval(str_replace(",", "", $value));
            },
            'cantidad_atendida' => function ($value) {
                if (empty($value)) {
                    return $value;
                }
                return floatval(str_replace(",", "", $value));
            },
            'importe_solicitado_iva' => function ($value) {
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
            },
            'importe_comprometido_iva' => function ($value) {

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
            },
            'importe_atendido_iva' => function ($value) {

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

            },
            'importe_solicitado_sin_iva' => function ($value) {
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
            },
            'importe_comprometido_sin_iva' => function ($value) {
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
            },
            'importe_atendido_sin_iva' => function ($value) {
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
                    $number = intval(str_replace(".", '', $value));
                }

                return $number;
            },
            'saldo_contrato' => function ($value) {
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
            },
            'saldo_contrato_porcentaje' => function ($value) {
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
            },
            'fecha_firma_contrato' => function ($value) {
                if (empty($value)) {
                    return $value;
                }
                return Carbon::createFromFormat('d/m/Y', $value)->toDateString();
            },
            'fecha_alta_imss' => function ($value) { //text
                if (empty($value)) {
                    return $value;
                }
                return $value;
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

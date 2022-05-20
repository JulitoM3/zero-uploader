<?php

namespace Database\Seeders;

use App\Compranet;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class abastos extends CsvSeeder
{
    public $contrato_id = null;

    public function __construct()
    {
        $this->file = '/database/csvs/abastos/articulos.csv';

        $this->tablename = 'abastos';
        $this->truncate = true;
        $this->delimiter = '~';
        $this->header = true;
        $this->parsers = [
            'numero_contrato' => function ($value) {
                $this->contrato_id = $value;
                return $value;
            },
            'contrato_id' => function ($value) {
                return Compranet::query()
                        ->where('numero_control_contrato', $this->contrato_id)
                        ->first(['id'])->id ?? null;

            },
            'fecha_actualizacion' => function ($value) {
                return $this->toTimeStamp($value);
            },

            'monto_maximo_contrato_con_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'monto_minimo_contrato_con_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'monto_maximo_clave_con_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'monto_minimo_clave_con_iva' => function ($value) {
                return $this->toDecimal($value);
            },
            'fecha_inicio' => function ($value) {

                return $this->toTimeStamp($value);
            },
            'fecha_termino' => function ($value) {
                if (!$value) {
                    return null;
                }
                return $this->toTimeStamp($value);
            },
            'precio_neto_contrato' => function ($value) {
                if (!$value) {
                    return null;
                }
                return floatval($value);
            },
            'cantidad_maxima_clave' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));
            },
            'cantidad_contratacion_original' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));

            },
            'cantidad_minimo_clave' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));

            },
            'cantidad_ejercida_o_solicitada' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));

            },
            'cant_solic_vigente_en_transito' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));

            },
            'cantidad_disponible' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));

            },
            'cantidad_atendida' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));

            },
            'cantidad_de_piezas_topadas' => function ($value) {
                if (!$value) {
                    return null;
                }
                return intval(str_replace(",", "", $value));

            },
            'porcentaje_ejercido' => function ($value) {
                if (!$value) {
                    return null;
                }
                return floatval($value);
            },
            'porcentaje_topado' => function ($value) {
                if (!$value) {
                    return null;
                }
                return floatval($value);
            },
            'porcen_atencion_sin_transito' => function ($value) {
                if (!$value) {
                    return null;
                }
                return floatval($value);
            },
            'fecha_dictamen' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'saldo_disponible_dictamen_prei' => function ($value) {
                return $this->toDecimal($value);
            },
            'monto_ejercido_dictamen_sai' => function ($value) {
                if (!$value) {
                    return null;
                }
                return $this->toDecimal($value);
            },
            'saldo_disponible_dictamen_sai' => function ($value) {
                if (!$value) {
                    return null;
                }
                return $this->toDecimal($value);
            },
            'monto_pagado' => function ($value) {
                if (!$value) {
                    return null;
                }
                return $this->toDecimal($value);
            },
            'iva' => function ($value) {
                if (!$value) {
                    return null;
                }
                return floatval($value);
            }
        ];
        $this->mapping = [
            'clas_ptal_origen',
            'ooad',
            'fecha_actualizacion',
            'numero_contrato',
            'numero_dictamen_definitivo',
            'monto_maximo_contrato_con_iva',
            'monto_minimo_contrato_con_iva',
            'monto_maximo_clave_con_iva',
            'monto_minimo_clave_con_iva',
            'numero_licitacion',
            'evento_compranet',
            'porcentaje_sancion_contrato',
            'dias_de_entrega_sancion',
            'numero_proveedor',
            'rfc_proveedor',
            'razon_social',
            'fecha_inicio',
            'fecha_termino',
            'tipo_contrato',
            'estado_contrato',
            'estatus_clave',
            'gpo',
            'gen',
            'esp',
            'dif',
            'var',
            'descripcion_articulo',
            'unidad_presentacion',
            'cantidad_presentacion',
            'tipo_presentacion',
            'partida_presupuestal',
            'des_partida_presupuestal',
            'cuadro_basico_sai',
            'cuenta_contable',
            'precio_neto_contrato',
            'cantidad_maxima_clave',
            'cantidad_contratacion_original',
            'cantidad_minimo_clave',
            'cantidad_ejercida_o_solicitada',
            'cant_solic_vigente_en_transito',
            'cantidad_disponible',
            'cantidad_atendida',
            'cantidad_de_piezas_topadas',
            'porcentaje_ejercido',
            'porcentaje_topado',
            'porcen_atencion_sin_transito',
            'fecha_dictamen',
            'saldo_disponible_dictamen_prei',
            'monto_ejercido_dictamen_sai',
            'saldo_disponible_dictamen_sai',
            'monto_pagado',
            'iva',
            'contrato_id'
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
            $number = intval(str_replace(".", "", $value));
        }

        return $number;
    }
}

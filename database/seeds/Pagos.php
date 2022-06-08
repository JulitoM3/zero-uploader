<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;

class Pagos extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/csvs/prei/pagos.csv';
        $this->tablename = 'altas';
        $this->truncate = false;
        $this->delimiter = '~';
        $this->header = true;
        $this->mapping = [
            'un',
            'comprobante',
            'origen',
            'usuario',
            'tipo_cbte',
            'subtipo_cbte',
            'no_proveedor',
            'nombre_proveedor',
            'contrato',
            'factura',
            'plantilla_contable',
            'fecha_emision',
            'fecha_contable',
            'fecha_factura',
            'fecha_prog_pago',
            'fecha_pago',
            'importe_capturado',
            'importe_mxn',
            'moneda',
            'cierre_man',
            'estado_cierre',
            'estado_entrada',
            'estado_ppto',
            'estado_paridad',
            'estado_aprobacion',
            'estado_contabilizacion',
            'estado_pago',
            'pagos',
            "porcent_hp",
            "metodo",
            "negociado_nafin",
            "banco",
            'cuenta_corta_bancaria',
            'referencia_pago',
            'importe_pagado',
            'importe_bruto_pago',
            'descuento',
            'no_prov_env_pago',
            'nombre_prov_env_pago',
            'asiento_ac',
            "fecha_asiento_ac",
            'asiento_py',
            'fecha_asiento_py',
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
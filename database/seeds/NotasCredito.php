<?php

namespace Database\Seeders;

use App\Pago;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class NotasCredito extends CsvSeeder
{
    private $comprobante = null;

    public function __construct()
    {

        $this->file = '/database/csvs/prei/Notas de credito.csv';
        $this->tablename = 'notas_de_credito';
        $this->truncate = true;
        $this->delimiter = '~';
        $this->header = true;
        $this->mapping = [
            'un_nc',
            'nota_de_credito',
            'secuencia',
            'no_proveedor',
            'origen',
            'importe_aplicado',
            'importe_original',
            "fecha_emision",
            "fecha_documento",
            "fecha_emision_original",
            "fecha_documento_original",
            'contrato',
            'pedido',
            'motivo_nc',
            'tipo',
            'estado_nc',
            'bit_usuario_emision',
            'bit_fecha_emision',
            'bit_usuario_ultima_actualiz',
            'bit_fecha_ultima_actualiz',
            'cr_un_cr',
            'cr_comprobante',
            'cr_tipo_cr',
            'cr_fecha_emision',
            'cr_fecha_prog_pago',
            'cr_fecha_pago',
            "cr_importe_mxn",
            "cr_moneda",
            'cr_cierre_manual',
            'cr_estado_cierre',
            'cr_estado_entrada',
            'cr_estado_presupuesto',
            'cr_estado_contabilizacion',
            'cr_estado_pago',
            'cr_hoja_de_pago',
            "cr_importe_bruto_a_pagar",
            "cr_descuento",
            "cr_importe_pagado",
            "pago_id",
        ];

        $this->parsers = [
            'cr_comprobante' => function ($value) {
                $this->comprobante = $value;
                return $value;
            },
            'pago_id' => function ($value) {
                $pago = Pago::where('comprobante', $this->comprobante)->first(['id']);
                return $pago->id ?? null;


            },
            'importe_aplicado' => function ($value) {
                return $this->toDecimal($value);
            },
            'importe_original' => function ($value) {
                return $this->toDecimal($value);
            },
            "fecha_emision" => function ($value) {
                return $this->toTimeStamp($value);
            },
            "fecha_documento" => function ($value) {
                return $this->toTimeStamp($value);
            },
            "fecha_emision_original" => function ($value) {
                return $this->toTimeStamp($value);
            },
            "fecha_documento_original" => function ($value) {
                return $this->toTimeStamp($value);
            },
            'bit_fecha_emision' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'bit_fecha_ultima_actualiz' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'cr_fecha_emision' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'cr_fecha_pago' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'cr_fecha_prog_pago' => function ($value) {
                return $this->toTimeStamp($value);
            },
            "cr_importe_mxn" => function ($value) {
                return $this->toDecimal($value);
            },
            "cr_importe_bruto_a_pagar" => function ($value) {
                return $this->toDecimal($value);
            },
            "cr_descuento" => function ($value) {
                return $this->toDecimal($value);
            },
            "cr_importe_pagado" => function ($value) {
                return $this->toDecimal($value);
            },
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

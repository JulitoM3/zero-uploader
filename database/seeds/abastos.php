<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class abastos extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/csvs/abastos/contratos.csv';

        $this->tablename = 'abastos';
        $this->truncate = true;
        $this->delimiter = ';';
        $this->header = true;
        $this->mapping = [
            'clas_ptal_origen',
            'ooads',
            'numero_contrato',
            'numero_dictamen_definitivo',
            'monto_maximo_con_iva',
            'monto_minimo_con_iva',
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
}

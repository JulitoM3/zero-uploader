<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string('un');
            $table->string('comprobante');
            $table->string('origen');
            $table->string('usuario');
            $table->string('tipo_cbte');
            $table->string('subtipo_cbte');
            $table->string('no_proveedor');
            $table->string('nombre_proveedor');
            $table->string('contrato');
            $table->string('factura');
            $table->string('plantilla_contable');
            $table->date('fecha_emision');
            $table->date('fecha_contable');
            $table->date('fecha_factura');
            $table->date('fecha_prog_pago');
            $table->date('fecha_pago');
            $table->decimal('importe_capturado', 15, 2);
            $table->decimal('importe_mxn', 15, 2);
            $table->string('moneda');
            $table->string('cierre_man');
            $table->string('estado_cierre');
            $table->string('estado_entrada');
            $table->string('estado_ppto');
            $table->string('estado_paridad');
            $table->string('estado_aprobacion');
            $table->string('estado_contabilizacion');
            $table->string('estado_pago');
            $table->string('pagos');
            $table->string("porcent_hp");
            $table->string("metodo");
            $table->string("negociado_nafin");
            $table->string("banco");
            $table->string('cuenta_corta_bancaria');
            $table->string('referencia_pago');
            $table->decimal('importe_pagado', 15, 2);
            $table->decimal('importe_bruto_pago', 15, 2);
            $table->decimal('descuento', 15, 2);
            $table->string('no_prov_env_pago');
            $table->string('nombre_prov_env_pago');
            $table->string('asiento_ac');
            $table->date("fecha_asiento_ac");
            $table->string('asiento_py');
            $table->date('fecha_asiento_py');

            $table->unsignedBigInteger('contrato_id');
            $table->foreign('contrato_id')
                ->references('id')
                ->on('compranet');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}

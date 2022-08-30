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
            $table->string('un')->nullable();
            $table->string('comprobante')->primary();
            $table->string('origen')->nullable();
            $table->string('usuario')->nullable();
            $table->string('tipo_cbte')->nullable();
            $table->string('subtipo_cbte')->nullable();
            $table->string('no_proveedor')->nullable();
            $table->string('nombre_proveedor')->nullable();
            $table->string('contrato')->nullable();
            $table->string('factura')->nullable();
            $table->string('plantilla_contable')->nullable();
            $table->timestamp('fecha_emision')->nullable();
            $table->timestamp('fecha_contable')->nullable();
            $table->timestamp('fecha_factura')->nullable();
            $table->timestamp('fecha_prog_pago')->nullable();
            $table->timestamp('fecha_pago')->nullable();
            $table->decimal('importe_capturado', 15, 2)->nullable();
            $table->decimal('importe_mxn', 15, 2)->nullable();
            $table->string('moneda')->nullable();
            $table->string('cierre_man')->nullable();
            $table->string('estado_cierre')->nullable();
            $table->string('estado_entrada')->nullable();
            $table->string('estado_ppto')->nullable();
            $table->string('estado_paridad')->nullable();
            $table->string('estado_aprobacion')->nullable();
            $table->string('estado_contabilizacion')->nullable();
            $table->string('estado_pago')->nullable();
            $table->string('pagos')->nullable();
            $table->string("porcent_hp")->nullable();
            $table->string("metodo")->nullable();
            $table->string("negociado_nafin")->nullable();
            $table->string("banco")->nullable();
            $table->string('cuenta_corta_bancaria')->nullable();
            $table->string('referencia_pago')->nullable();
            $table->decimal('importe_pagado', 15, 2)->nullable();
            $table->decimal('importe_bruto_pago', 15, 2)->nullable();
            $table->decimal('descuento', 15, 2)->nullable();
            $table->string('no_prov_env_pago')->nullable();
            $table->string('nombre_prov_env_pago')->nullable();
            $table->string('asiento_ac')->nullable();
            $table->timestamp("fecha_asiento_ac")->nullable();
            $table->string('asiento_py')->nullable();
            $table->timestamp('fecha_asiento_py')->nullable();

            $table->unsignedBigInteger('contrato_id')->nullable();
            $table->foreign('contrato_id')
                ->references('id')
                ->on('compranet')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('alta_id')->nullable();
            $table->foreign('alta_id')
                ->references('id')
                ->on('altas_sai_prei')
                ->onUpdate('cascade')
                ->onDelete('cascade');


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

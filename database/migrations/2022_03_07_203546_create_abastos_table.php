<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abastos', function (Blueprint $table) {
            $table->id();
            $table->string('clas_ptal_origen')->nullable();
            $table->string('ooad')->nullable();
            $table->timestamp('fecha_actualizacion')->nullable();
            $table->string('numero_contrato')->nullable();
            $table->string('numero_dictamen_definitivo')->nullable();
            $table->decimal('monto_maximo_contrato_con_iva', 15, 2)->nullable();
            $table->decimal('monto_minimo_contrato_con_iva', 15, 2)->nullable();
            $table->decimal('monto_maximo_clave_con_iva', 15, 2)->nullable();
            $table->decimal('monto_minimo_clave_con_iva', 15, 2)->nullable();
            $table->string('numero_licitacion')->nullable();
            $table->string('evento_compranet')->nullable();
            $table->string('porcentaje_sancion_contrato')->nullable();
            $table->string('dias_de_entrega_sancion')->nullable();
            $table->string('numero_proveedor')->nullable();
            $table->string('rfc_proveedor')->nullable();
            $table->string('razon_social')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->string('tipo_contrato')->nullable();
            $table->string('estado_contrato')->nullable();
            $table->string('estatus_clave')->nullable();
            $table->string('gpo')->nullable();
            $table->string('gen')->nullable();
            $table->string('esp')->nullable();
            $table->string('dif')->nullable();
            $table->string('var')->nullable();
            $table->longText('descripcion_articulo')->nullable();
            $table->string('unidad_presentacion')->nullable();
            $table->string('cantidad_presentacion')->nullable();
            $table->string('tipo_presentacion')->nullable();
            $table->string('partida_presupuestal')->nullable();
            $table->string('des_partida_presupuestal')->nullable();
            $table->string('cuadro_basico_sai')->nullable();
            $table->string('cuenta_contable')->nullable();
            $table->decimal('precio_neto_contrato', 15, 2)->nullable();
            $table->decimal('cantidad_maxima_clave', 15, 2)->nullable();
            $table->decimal('cantidad_contratacion_original', 15, 2)->nullable();
            $table->decimal('cantidad_minimo_clave', 15, 2)->nullable();
            $table->decimal('cantidad_ejercida_o_solicitada', 15, 2)->nullable();
            $table->decimal('cant_solic_vigente_en_transito', 15, 2)->nullable();
            $table->decimal('cantidad_disponible', 15, 2)->nullable();
            $table->decimal('cantidad_atendida', 15, 2)->nullable();
            $table->decimal('cantidad_de_piezas_topadas', 15, 2)->nullable();
            $table->string('porcentaje_ejercido')->nullable();
            $table->string('porcentaje_topado')->nullable();
            $table->string('porcen_atencion_sin_transito')->nullable();
            $table->date('fecha_dictamen')->nullable();
            $table->decimal('saldo_disponible_dictamen_prei', 15, 2)->nullable();
            $table->decimal('monto_ejercido_dictamen_sai', 15, 2)->nullable();
            $table->decimal('saldo_disponible_dictamen_sai', 15, 2)->nullable();
            $table->decimal('monto_pagado', 15, 2)->nullable();
            $table->string('iva')->nullable();
            $table->unsignedBigInteger('contrato_id')->nullable();
            $table->foreign('contrato_id')->references('id')->on('compranet');

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
        Schema::dropIfExists('abastos');
    }
}

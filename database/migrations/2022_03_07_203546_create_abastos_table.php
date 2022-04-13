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
            $table->string('ooads')->nullable();
            $table->string('numero_contrato')->nullable();
            $table->string('numero_dictamen_definitivo')->nullable();
            $table->string('monto_maximo_con_iva')->nullable();
            $table->string('monto_minimo_con_iva')->nullable();
            $table->string('monto_maximo_clave_con_iva')->nullable();
            $table->string('monto_minimo_clave_con_iva')->nullable();
            $table->string('numero_licitacion')->nullable();
            $table->string('evento_compranet')->nullable();
            $table->string('porcentaje_sancion_contrato')->nullable();
            $table->string('dias_de_entrega_sancion')->nullable();
            $table->string('numero_proveedor')->nullable();
            $table->string('rfc_proveedor')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('fecha_inicio')->nullable();
            $table->string('fecha_termino')->nullable();
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
            $table->string('precio_neto_contrato')->nullable();
            $table->string('cantidad_maxima_clave')->nullable();
            $table->string('cantidad_contratacion_original')->nullable();
            $table->string('cantidad_minimo_clave')->nullable();
            $table->string('cantidad_ejercida_o_solicitada')->nullable();
            $table->string('cant_solic_vigente_en_transito')->nullable();
            $table->string('cantidad_disponible')->nullable();
            $table->string('cantidad_atendida')->nullable();
            $table->string('cantidad_de_piezas_topadas')->nullable();
            $table->string('porcentaje_ejercido')->nullable();
            $table->string('porcentaje_topado')->nullable();
            $table->string('porcen_atencion_sin_transito')->nullable();
            $table->string('fecha_dictamen')->nullable();
            $table->string('saldo_disponible_dictamen_prei')->nullable();
            $table->string('monto_ejercido_dictamen_sai')->nullable();
            $table->string('saldo_disponible_dictamen_sai')->nullable();
            $table->string('monto_pagado')->nullable();
            $table->string('iva')->nullable();


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

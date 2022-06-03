<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasDeCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_de_credito', function (Blueprint $table) {
            $table->id();
            $table->string('un_nc');
            $table->string('nota_de_credito');
            $table->string('secuencia');
            $table->string('no_proveedor');
            $table->string('origen');
            $table->decimal('importe_aplicado', 15, 2);
            $table->decimal('importe_original', 15, 2);
            $table->timestamp("fecha_emision");
            $table->timestamp("fecha_documento");
            $table->timestamp("fecha_emision_original");
            $table->timestamp("fecha_documento_original");
            $table->string('contrato');
            $table->string('pedido');
            $table->string('motivo_nc');
            $table->string('tipo');
            $table->string('estado_nc');
            $table->string('bit_usuario_emision');
            $table->timestamp('bit_fecha_emision');
            $table->string('bit_usuario_ultima_actualiz');
            $table->timestamp('bit_fecha_ultima_actualiz');
            $table->string('cr_un_cr');
            $table->string('cr_comprobante');
            $table->string('cr_tipo_cr');
            $table->timestamp('cr_fecha_emision');
            $table->timestamp('cr_fecha_prog_pago');
            $table->decimal("cr_importe_mxn", 15, 2);
            $table->string("cr_moneda");
            $table->string('cr_cierre_manual');
            $table->string('cr_estado_cierre');
            $table->string('cr_estado_entrada');
            $table->string('cr_estado_presupuesto');
            $table->string('cr_estado_aprobacion');
            $table->string('cr_estado_contabilizacion');
            $table->string('cr_estado_pago');
            $table->string('cr_hoja_de_pago');
            $table->decimal("cr_importe_bruto_a_pagar", 15, 2);
            $table->decimal("cr_descuento", 15, 2);
            $table->decimal("cr_importe_pagado", 15, 2);
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
        Schema::dropIfExists('notas_de_credito');
    }
}

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
            $table->string('un_nc')->nullable();
            $table->string('nota_de_credito')->unique();
            $table->string('secuencia')->nullable();
            $table->string('no_proveedor')->nullable();
            $table->string('origen')->nullable();
            $table->decimal('importe_aplicado', 15, 2)->nullable();
            $table->decimal('importe_original', 15, 2)->nullable();
            $table->timestamp("fecha_emision")->nullable();
            $table->timestamp("fecha_documento")->nullable();
            $table->timestamp("fecha_emision_original")->nullable();
            $table->timestamp("fecha_documento_original")->nullable();
            $table->string('contrato')->nullable();
            $table->string('pedido')->nullable();
            $table->string('motivo_nc')->nullable();
            $table->string('tipo')->nullable();
            $table->string('estado_nc')->nullable();
            $table->string('bit_usuario_emision')->nullable();
            $table->timestamp('bit_fecha_emision')->nullable();
            $table->string('bit_usuario_ultima_actualiz')->nullable();
            $table->timestamp('bit_fecha_ultima_actualiz')->nullable();
            $table->string('cr_un_cr')->nullable();
            $table->string('cr_comprobante')->nullable();
            $table->string('cr_tipo_cr')->nullable();
            $table->timestamp('cr_fecha_emision')->nullable();
            $table->timestamp('cr_fecha_prog_pago')->nullable();
            $table->timestamp('cr_fecha_pago')->nullable();
            $table->decimal("cr_importe_mxn", 15, 2)->nullable();
            $table->string("cr_moneda")->nullable();
            $table->string('cr_cierre_manual')->nullable();
            $table->string('cr_estado_cierre')->nullable();
            $table->string('cr_estado_entrada')->nullable();
            $table->string('cr_estado_presupuesto')->nullable();
            $table->string('cr_estado_aprobacion')->nullable();
            $table->string('cr_estado_contabilizacion')->nullable();
            $table->string('cr_estado_pago')->nullable();
            $table->string('cr_hoja_de_pago')->nullable();
            $table->decimal("cr_importe_bruto_a_pagar", 15, 2)->nullable();
            $table->decimal("cr_descuento", 15, 2)->nullable();
            $table->decimal("cr_importe_pagado", 15, 2)->nullable();

            $table->unsignedBigInteger('pago_id')->nullable();
            $table->foreign('pago_id')
                ->references('id')
                ->on('pagos')
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
        Schema::dropIfExists('notas_de_credito');
    }
}

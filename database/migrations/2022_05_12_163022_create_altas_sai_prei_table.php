<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltasSaiPreiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altas_sai_prei', function (Blueprint $table) {
            $table->id();
            $table->longText('clas_ptal_origen')->nullable();
            $table->longText('ooad_umae')->nullable();
            $table->longText('clas_ptal')->nullable();
            $table->longText('nombre_unidad')->nullable();
            $table->year('year')->nullable();
            $table->string('alta_prei')->nullable();
            $table->timestamp('fecha_alta')->nullable();
            $table->string('numero_contrato')->nullable();
            $table->longText('numero_proveedor')->nullable();
            $table->longText('razon_social')->nullable();
            $table->string('cargo_sai')->nullable();
            $table->string('credito_sai')->nullable();

            $table->decimal('importe_sai')->nullable();
            $table->decimal('importe_prei')->nullable();
            $table->decimal('importe_conciliado')->nullable();

            $table->string('tipo_alta')->nullable();
            $table->longText('descripcion_tipo_alta')->nullable();
            $table->longText('tipo_error')->nullable();
            $table->string('enviado')->nullable();
            $table->string('fecha_envio');
            $table->string('numero_reposicion')->nullable();
            $table->timestamp('fecha_informacion_prei')->nullable();
            $table->string('ui_abono')->nullable();
            $table->string('un_ap')->nullable();
            $table->string('cc_abono')->nullable();
            $table->string('cuenta_abono')->nullable();
            $table->string('ui_cargo')->nullable();
            $table->string('cc_cargo')->nullable();
            $table->string('cuenta_cargo')->nullable();

            $table->date('fecha_carga')->nullable();
            $table->string('asiento')->nullable();
            $table->string('comprobante_prei')->nullable();
            $table->date('fecha_introd_cr')->nullable();
            $table->string('estatus_alta_calculado')->nullable();
            $table->string('comprobante_pago')->nullable();
            $table->date('fecha_programada_pago')->nullable();
            $table->string('estatus_pago_calculado')->nullable();

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
        Schema::dropIfExists('altas_sai_prei');
    }
}

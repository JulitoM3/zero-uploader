<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesReposicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_reposicion', function (Blueprint $table) {
            $table->id();
            $table->longText('clas_ptal_origen')->nullable();
            $table->longText('nombre_ooad')->nullable();
            $table->longText('id_ooad')->nullable();
            $table->timestamp('fecha_actualizacion');
            $table->longText('clas_ptal_entrega')->nullable();
            $table->longText('nombre_unidad_entrega')->nullable();
            $table->longText('numero_contrato')->nullable();
            $table->longText('numero_licitacion')->nullable();
            $table->longText('numero_evento_compranet')->nullable();
            $table->longText('tipo_evento')->nullable();
            $table->timestamp('fecha_inicio_contrato')->nullable();
            $table->timestamp('fecha_termino_contrato')->nullable();
            $table->decimal('monto_minimo_contrato_sin_iva', 15, 2)->nullable();
            $table->decimal('monto_maximo_contrato_sin_iva', 15, 2)->nullable();
            $table->decimal('cantidad_minima_piezas', 15, 2)->nullable();
            $table->decimal('cantidad_maxima_piezas', 15, 2)->nullable();
            $table->decimal('monto_minimo_clave_sin_iva', 15, 2)->nullable();
            $table->decimal('monto_maximo_clave_sin_iva', 15, 2)->nullable();
            $table->string('numero_de_solicitud')->nullable();
            $table->string('numero_de_orden_reposicion')->unique();
            $table->longText('origen')->nullable();
            $table->longText('gpo')->nullable();
            $table->longText('gen')->nullable();
            $table->longText('esp')->nullable();
            $table->longText('dif')->nullable();
            $table->longText('var')->nullable();
            $table->longText('descripcion_articulo')->nullable();
            $table->string('unidad_presentacion')->nullable();
            $table->decimal('cantidad_presentacion', 15, 2)->nullable();
            $table->string('tipo_presentacion')->nullable();
            $table->longText('razon_social')->nullable();
            $table->longText('rfc_proveedor')->nullable();
            $table->longText('numero_proveedor')->nullable();
            $table->timestamp('fecha_expedicion')->nullable();
            $table->timestamp('fecha_www')->nullable();
            $table->timestamp('fecha_confirmacion')->nullable();
            $table->timestamp('fecha_entrega')->nullable();
            $table->timestamp('fecha_atencion')->nullable();
            $table->timestamp('fecha_sello_alta_qr')->nullable();
            $table->timestamp('fecha_cancelacion')->nullable();
            $table->text('fecha_entrega_inicial')->nullable();
            $table->text('fecha_entrega_ampliada')->nullable();
            $table->longText('matricula_usuario_amplio')->nullable();
            $table->longText('estatus_orden')->nullable();
            $table->decimal('precio_compra', 15, 2)->nullable();
            $table->longText('iva')->nullable();
            $table->decimal('cantidad_solicitada', 15, 2)->nullable();
            $table->decimal('cantidad_comprometida', 15, 2)->nullable();
            $table->decimal('cantidad_atendida', 15, 2)->nullable();
            $table->decimal('importe_solicitado_iva', 15, 2)->nullable();
            $table->decimal('importe_comprometido_iva', 15, 2)->nullable();
            $table->decimal('importe_atendido_iva', 15, 2)->nullable();
            $table->decimal('importe_solicitado_sin_iva', 15, 2)->nullable();
            $table->decimal('importe_comprometido_sin_iva', 15, 2)->nullable();
            $table->decimal('importe_atendido_sin_iva', 15, 2)->nullable();
            $table->decimal('saldo_contrato', 15, 2)->nullable();
            $table->decimal('saldo_contrato_porcentaje', 15, 2)->nullable();
            $table->timestamp('fecha_firma_contrato')->nullable();
            $table->string('orden_resguardo')->nullable();
            $table->longText('clas_ptal_operador_logistico')->nullable();
            $table->longText('nombre_operador_logistico')->nullable();
            $table->longText('zona_operador_logistico')->nullable();
            $table->decimal('cantidad_alta_imss', 15, 2)->nullable();
            $table->text('fecha_alta_imss')->nullable();
            $table->unsignedBigInteger('contrato_id')->nullable();
            $table->foreign('contrato_id')->references('id')->on('compranet')
                ->onUpdate('cascade')
                ->onDelete('cascade');;
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
        Schema::dropIfExists('ordenes_reposicion');
    }
}

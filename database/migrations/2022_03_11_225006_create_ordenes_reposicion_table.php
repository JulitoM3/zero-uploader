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
            $table->longText('fecha_actualizacion')->nullable();
            $table->longText('clas_ptal_entrega')->nullable();
            $table->longText('nombre_unidad_entrega')->nullable();
            $table->longText('numero_contrato')->nullable();
            $table->longText('numero_licitacion')->nullable();
            $table->longText('numero_evento_compranet')->nullable();
            $table->longText('tipo_evento')->nullable();
            $table->longText('fecha_inicio_contrato')->nullable();
            $table->longText('fecha_termino_contrato')->nullable();
            $table->longText('monto_minimo_contrato_sin_iva')->nullable();
            $table->longText('monto_maximo_contrato_sin_iva')->nullable();
            $table->longText('cantidad_minima_piezas')->nullable();
            $table->longText('cantidad_maxima_piezas')->nullable();
            $table->longText('monto_minimo_clave_sin_iva')->nullable();
            $table->longText('monto_maximo_clave_sin_iva')->nullable();
            $table->longText('numero_de_solicitud')->nullable();
            $table->longText('numero_de_orden_reposicion')->nullable();
            $table->longText('origen')->nullable();
            $table->longText('gpo')->nullable();
            $table->longText('gen')->nullable();
            $table->longText('esp')->nullable();
            $table->longText('dif')->nullable();
            $table->longText('var')->nullable();
            $table->longText('descripcion_articulo')->nullable();
            $table->longText('unidad_presentacion')->nullable();
            $table->longText('cantidad_presentacion')->nullable();
            $table->longText('tipo_presentacion')->nullable();
            $table->longText('razon_social')->nullable();
            $table->longText('rfc_proveedor')->nullable();
            $table->longText('numero_proveedor')->nullable();
            $table->longText('fecha_expedicion')->nullable();
            $table->longText('fecha_www')->nullable();
            $table->longText('fecha_confirmacion')->nullable();
            $table->longText('fecha_entrega')->nullable();
            $table->longText('fecha_atencion')->nullable();
            $table->longText('fecha_sello_alta_qr')->nullable();
            $table->longText('fecha_cancelacion')->nullable();
            $table->longText('fecha_entrega_inicial')->nullable();
            $table->longText('fecha_entrega_ampliada')->nullable();
            $table->longText('matricula_usuario_amplio')->nullable();
            $table->longText('estatus_orden')->nullable();
            $table->longText('precio_compra')->nullable();
            $table->longText('iva')->nullable();
            $table->longText('cantidad_solicitada')->nullable();
            $table->longText('cantidad_comprometida')->nullable();
            $table->longText('cantidad_atendida')->nullable();
            $table->longText('importe_solicitado_iva')->nullable();
            $table->longText('importe_comprometido_iva')->nullable();
            $table->longText('importe_atendido_iva')->nullable();
            $table->longText('importe_solicitado_sin_iva')->nullable();
            $table->longText('importe_comprometido_sin_iva')->nullable();
            $table->longText('importe_atendido_sin_iva')->nullable();
            $table->longText('saldo_contrato')->nullable();
            $table->longText('saldo_contrato_porcentaje')->nullable();
            $table->longText('fecha_firma_contrato')->nullable();
            $table->longText('orden_resguardo')->nullable();
            $table->longText('clas_ptal_operador_logistico')->nullable();
            $table->longText('nombre_operador_logistico')->nullable();
            $table->longText('zona_operador_logistico')->nullable();
            $table->longText('cantidad_alta_imss')->nullable();
            $table->longText('fecha_alta_imss')->nullable();
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

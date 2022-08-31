<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altas', function (Blueprint $table) {
            $table->id();
            $table->longText('clas_ptal_origen')->nullable();
            $table->longText('nombre_ooad')->nullable();
            $table->longText('estado_ooad')->nullable();
            $table->timestamp('fecha_registro')->nullable();
            $table->longText('clas_ptal_entrega')->nullable();
            $table->longText('nombre_unidad_entrega')->nullable();
            $table->longText('tipo_reporte')->nullable();
            $table->string('numero_alta_contable')->unique();
            $table->string('numero_contrato')->nullable();
            $table->string('numero_orden_reposicion')->nullable();
            $table->string('cargo_a')->nullable();
            $table->string('credito_a')->nullable();
            $table->longText('descripcion_movimiento')->nullable();
            $table->longText('gpo')->nullable();
            $table->longText('gen')->nullable();
            $table->longText('esp')->nullable();
            $table->longText('dif')->nullable();
            $table->longText('var')->nullable();
            $table->longText('descripcion_articulo')->nullable();
            $table->string('unidad_presentacion')->nullable();
            $table->decimal('cantidad_presentacion', 15, 2)->nullable();
            $table->string('tipo_presentacion')->nullable();
            $table->decimal('precio_catalogo_articulos', 15, 2)->nullable();
            $table->decimal('precio_compra', 15, 2)->nullable();
            $table->decimal('iva', 15, 2)->nullable();
            $table->decimal('cantidad_autorizada', 15, 2)->nullable();
            $table->decimal('cantidad_conteo', 15, 2)->nullable();
            $table->decimal('importe_articulo_sin_iva', 15, 2)->nullable();
            $table->decimal('importe_alta_iva', 15, 2)->nullable();
            $table->string('linea_articulo')->nullable();
            $table->longText('rfc_proveedor')->nullable();
            $table->longText('numero_proveedor')->nullable();
            $table->longText('razon_social')->nullable();
            $table->string('numero_licitacion')->nullable();
            $table->timestamp("fecha_hora_recepcion")->nullable();
            $table->timestamp("fecha_hora_entrega")->nullable();
            $table->timestamp("fecha_hora_alta")->nullable();
            $table->string('matricula_usuario_registro')->nullable();
            $table->string('partida_presupuestal')->nullable();
            $table->longText('tipo_error')->nullable();
            $table->string('enviado')->nullable();
            $table->string('fecha_envio_prei')->nullable();

            $table->unsignedBigInteger('contrato_id')->nullable();
            $table->unsignedBigInteger('orden_id')->nullable();

            $table->foreign('contrato_id')->references('id')->on('compranet')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('orden_id')->references('id')->on('ordenes_reposicion')
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
        Schema::dropIfExists('altas');
    }
}

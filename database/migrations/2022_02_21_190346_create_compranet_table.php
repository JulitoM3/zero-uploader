<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompranetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compranet', function (Blueprint $table) {
            $table->id();
            $table->enum('orden', ['APF', 'GM', 'GE'])->default('APF');
            $table->string('siglas_institucion');
            $table->string('institucion');
            $table->string('clave_unidad_compradora')->nullable();
            $table->string('nombre_unidad_compradora')->nullable();
            $table->string('respo_unidad_compradora')->nullable();
            $table->string('codigo_expediente')->nullable();
            $table->string('referencia_expediente')->nullable();
            $table->string('clave_cucop')->nullable();
            $table->string('titulo_expediente')->nullable();
            $table->longText('plantilla_expediente')->nullable();
            $table->string('fundamento_legal')->nullable();
            $table->string('numero_procedimiento')->nullable();
            $table->string('fecha_fallo')->nullable();
            $table->string('fecha_publicacion')->nullable();
            $table->string('fecha_apertura')->nullable();
            $table->string('caracter_procedimiento')->nullable();
            $table->string('tipo_de_contratacion')->nullable();
            $table->string('tipo_procedimiento')->nullable();
            $table->string('medio_utilizado_propuestas')->nullable();
            $table->string('codigo_contrato')->unique();
            $table->string('numero_control_contrato')->nullable();
            $table->longText('titulo_contrato')->nullable();
            $table->longText('descripcion_contrato')->nullable();
            $table->longText('fecha_inicio_contrato')->nullable();
            $table->longText('fecha_fin_contrato')->nullable();
            $table->double('importe_contrato', 15, 2)->nullable();
            $table->longText('moneda')->nullable();
            $table->enum('estatus_contrato', ['EXPIRADO', 'ACTIVO', 'TERMINADO'])->nullable();
            $table->boolean('convenio_modificatorio')->nullable();
            $table->longText('clave_programa_federal')->nullable();
            $table->longText('fecha_firma_contrato')->nullable();
            $table->longText('contrato_marco')->nullable();
            $table->boolean('compra_consolidada')->nullable();
            $table->boolean('contrato_plurianual')->nullable();
            $table->longText('clave_cartera_shcp')->nullable();
            $table->longText('folio_rupc')->nullable();
            $table->longText('rfc')->nullable();
            $table->longText('proveedor_contratista')->nullable();
            $table->longText('estratificacion')->nullable();
            $table->longText('clave_pais')->nullable();
            $table->longText('rfc_verificado_sat')->nullable();
            $table->longText('credito_externo')->nullable();
            $table->longText('organismo_financiero')->nullable();
            $table->longText('url_compranet')->nullable();

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
        Schema::dropIfExists('compranet');
    }
}

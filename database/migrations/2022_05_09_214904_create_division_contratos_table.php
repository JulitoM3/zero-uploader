<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_contratos', function (Blueprint $table) {
            $table->id();
            $table->string('ejercicio_presupuestal')->nullable();
            $table->string('division')->nullable();
            $table->string('comprador')->nullable();
            $table->string('requirente')->nullable();
            $table->string('tecnico')->nullable();
            $table->longText('nom_proc')->nullable();
            $table->longText('nom_proc_corto')->nullable();
            $table->string('estatus')->nullable();
            $table->boolean('consolidada')->nullable();
            $table->string('dependencia_entidad_consolida')->nullable();

            $table->string('num_of_req_sol_inv_mer')->nullable();
            $table->timestamp('fecha_num_req_sol_inv_mer')->nullable();
            $table->string('num_of_cabcs_sol_im_cim')->nullable();
            $table->timestamp('fecha_num_of_cabcs_sol_im_cim')->nullable();
            $table->string('num_of_cim_ent_im_cabcs')->nullable();
            $table->timestamp('fecha_num_of_cim_ent_im_cabcs')->nullable();
            $table->string('numero_inv_mer')->nullable();
            $table->string('num_of_cabcs_ent_im_a_req')->nullable();
            $table->timestamp('fecha_num_of_cabcs_ent_im_a_req')->nullable();

            $table->string('num_of_re_sol_pmr_a_cabcs')->nullable();
            $table->timestamp('fecha_num_of_re_sol_pmr_a_cabcs')->nullable();
            $table->string('num_of_cabcs_sol_pmr_a_cim')->nullable();
            $table->timestamp('fecha_num_of_cabcs_sol_pmr_a_cim')->nullable();
            $table->string('num_of_cim_ent_pmr_a_cabcs')->nullable();
            $table->timestamp('fecha_num_of_cim_ent_pmr_a_cabcs')->nullable();
            $table->string('num_of_cabcs_ent_pmr_a_req')->nullable();
            $table->timestamp('fecha_num_of_cabcs_ent_pmr_a_req')->nullable();

            $table->string('num_of_solicitud_contratacion')->nullable();
            $table->timestamp('fecha_num_of_solicitud_contratacion')->nullable();
            $table->string('tipo_suficiencia_presupuestal')->nullable();
            $table->longText('num_of_suficiencia_presupuestal')->nullable();
            $table->timestamp('fecha_num_of_suficiencia_presupuestal')->nullable();
            $table->decimal('monto_suficiencia_presupuestal_oficio', 15, 2)->nullable();
            $table->decimal('monto_suficiencia_presupuestal_este_procedimiento', 15, 2)->nullable();
            $table->string('tipo_contratacion')->nullable();
            $table->string('caracter_contratacion')->nullable();
            $table->string('fundamento_contratacion')->nullable();
            $table->string('num_resolucion_cons_tec')->nullable();
            $table->timestamp('fecha_resolucion_cons_tec')->nullable();
            $table->boolean('plurianual')->nullable();
            $table->tinyText('criterio_evaluacion')->nullable();
            $table->tinyText('tipo_abastecimiento')->nullable();

            $table->string('num_of_sol_testigo_social')->nullable();
            $table->timestamp('fecha_num_of_sol_testigo_social')->nullable();
            $table->string('num_of_des_testigo_social')->nullable();
            $table->timestamp('fecha_num_of_des_testigo_social')->nullable();

            $table->timestamp('fecha_publicacion_pre_conv_compranet')->nullable();
            $table->timestamp('fecha_invitacion_sureco')->nullable();
            $table->timestamp('fecha_celebracion_sureco')->nullable();
            $table->tinyText('status_sureco')->nullable();

            $table->string('num_of_solic_pub_conv_dof_jd')->nullable();
            $table->timestamp('fecha_num_of_solic_pub_conv_dof_jd')->nullable();

            $table->timestamp('fecha_publicacion_conv_dof')->nullable();
            $table->timestamp('fecha_publicacion_conv_compranet')->nullable();
            $table->tinyText('sdi_compranet')->nullable();

            $table->string('numero_procedimiento')->nullable();
            $table->timestamp('fecha_inicial_junta_aclaraciones')->nullable();
            $table->timestamp('fecha_final_junta_aclaraciones')->nullable();
            $table->timestamp('fecha_pres_apertura_propo')->nullable();
            $table->tinyText('forma_entrega_de_prop_req_eval')->nullable();
            $table->string('num_of_ent_prop_req')->nullable();
            $table->timestamp('fecha_num_of_ent_prop_req')->nullable();

            $table->string('num_of_rec_eval_cabcs')->nullable();
            $table->timestamp('fecha_num_of_rec_eval_cabcs')->nullable();
            $table->timestamp('fecha_fallo')->nullable();
            $table->string('proveedor_adjudicado')->nullable();
            $table->string('rfc')->nullable();
            $table->string('numero_proveedor')->nullable();
            $table->integer('total_partidas_adjudicadas')->nullable();
            $table->decimal('monto_adjudicado_antes_impuestos', 15, 2)->nullable();
            $table->decimal('monto_adjudicado_impuestos_incluidos', 15, 2)->nullable();
            $table->decimal('monto_minimo_adjudicado_antes_impuestos', 15, 2)->nullable();
            $table->decimal('monto__minimo_adjudicado_impuestos_incluidos', 15, 2)->nullable();
            $table->decimal('monto_maximo_adjudicado_antes_impuestos', 15, 2)->nullable();
            $table->decimal('monto_maximo_adjudicado_impuestos_incluidos', 15, 2)->nullable();
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
        Schema::dropIfExists('division_contratos');
    }
}

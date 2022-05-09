<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class divisionContratos extends CsvSeeder
{
    public function __construct()
    {
        $this->mapping = [
            'ejercicio_presupuestal',
            'division',
            'comprador',
            'requirente',
            'tecnico',
            'nom_proc',
            'nom_proc_corto',
            'estatus',
            'consolidada',
            'dependencia_entidad_consolida',
            'num_of_req_sol_inv_mer',
            'fecha_num_req_sol_inv_mer',
            'num_of_cabcs_sol_im_cim',
            'fecha_num_of_cabcs_sol_im_cim',
            'num_of_cim_ent_im_cabcs',
            'fecha_num_of_cim_ent_im_cabcs',
            'numero_inv_mer',
            'num_of_cabcs_ent_im_a_req',
            'fecha_num_of_cabcs_ent_im_a_req',
            'num_of_re_sol_pmr_a_cabcs',
            'fecha_num_of_re_sol_pmr_a_cabcs',
            'num_of_cabcs_sol_pmr_a_cim',
            'fecha_num_of_cabcs_sol_pmr_a_cim',
            'num_of_cim_ent_pmr_a_cabcs',
            'fecha_num_of_cim_ent_pmr_a_cabcs',
            'num_of_cabcs_ent_pmr_a_req',
            'fecha_num_of_cabcs_ent_pmr_a_req',
            'num_of_solicitud_contratacion',
            'fecha_num_of_solicitud_contratacion',
            'tipo_suficiencia_presupuestal',
            'num_of_suficiencia_presupuestal',
            'fecha_num_of_suficiencia_presupuestal',
            'monto_suficiencia_presupuestal_oficio',
            'monto_suficiencia_presupuestal_este_procedimiento',
            'tipo_contratacion',
            'caracter_contratacion',
            'fundamento_contratacion',
            'num_resolucion_cons_tec',
            'fecha_resolucion_cons_tec',
            'plurianual',
            'criterio_evaluacion',
            'tipo_abastecimiento',
            'num_of_sol_testigo_social',
            'fecha_num_of_sol_testigo_social',
            'num_of_des_testigo_social',
            'fecha_num_of_des_testigo_social',
            'fecha_publicacion_pre_conv_compranet',
            'fecha_invitacion_sureco',
            'fecha_celebracion_sureco',
            'status_sureco',
            'num_of_solic_pub_conv_dof_jd',
            'fecha_num_of_solic_pub_conv_dof_jd',
            'fecha_publicacion_conv_dof',
            'fecha_publicacion_conv_compranet',
            'sdi_compranet',
            'numero_procedimiento',
            'fecha_inicial_junta_aclaraciones',
            'fecha_final_junta_aclaraciones',
            'fecha_pres_apertura_propo',
            'forma_entrega_de_prop_req_eval',
            'num_of_ent_prop_req',
            'fecha_num_of_ent_prop_req',
            'num_of_rec_eval_cabcs',
            'fecha_num_of_rec_eval_cabcs',
            'fecha_fallo',
            'proveedor_adjudicado',
            'rfc',
            'numero_proveedor',
            'total_partidas_adjudicadas',
            'monto_adjudicado_antes_impuestos',
            'monto_adjudicado_impuestos_incluidos',
            'monto_minimo_adjudicado_antes_impuestos',
            'monto__minimo_adjudicado_impuestos_incluidos',
            'monto_maximo_adjudicado_antes_impuestos',
            'monto_maximo_adjudicado_impuestos_incluidos',
        ];

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        parent::run();
    }
}

<?php

namespace Database\Seeders;


use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class divisionContratos extends CsvSeeder
{

    public function __construct()
    {

        $this->file = '/database/csvs/division contratos/procedimientos.csv';
        $this->delimiter = '~';
        $this->tablename = 'division_contratos';
        $this->truncate = false;
        $this->header = false;
        $this->parsers = [
            'consolidada' => function ($value) {
                return $value == 'S';
            },
            'fecha_num_req_sol_inv_mer' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_cabcs_sol_im_cim' => function ($value) {
                return $this->toTimeStamp($value);

            },
            'fecha_num_of_cim_ent_im_cabcs' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_cabcs_ent_im_a_req' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_re_sol_pmr_a_cabcs' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_cabcs_sol_pmr_a_cim' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_cim_ent_pmr_a_cabcs' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_cabcs_ent_pmr_a_req' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_solicitud_contratacion' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_suficiencia_presupuestal' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_resolucion_cons_tec' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_sol_testigo_social' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_des_testigo_social' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_publicacion_pre_conv_compranet' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_invitacion_sureco' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_celebracion_sureco' => function ($value) {
                return $this->toTimeStamp($value);
            },
            'fecha_num_of_solic_pub_conv_dof_jd' => function ($value) {
                return $this->toTimeStamp($value);
            },//AZ
            'fecha_publicacion_conv_dof' => function ($value) {
                return $this->toTimeStamp($value);
            },//BA
            'fecha_publicacion_conv_compranet' => function ($value) {
                return $this->toTimeStamp($value);
            },//BB
            'fecha_inicial_junta_aclaraciones' => function ($value) {
                return $this->toTimeStamp($value);
            },//BF
            'fecha_final_junta_aclaraciones' => function ($value) {
                return $this->toTimeStamp($value);
            },//BG
            'fecha_pres_apertura_propo' => function ($value) {
                return $this->toTimeStamp($value);
            },//BH
            'fecha_num_of_ent_prop_req' => function ($value) {
                return $this->toTimeStamp($value);
            },//BK
            'fecha_num_of_rec_eval_cabcs' => function ($value) {
                return $this->toTimeStamp($value);
            },//BM
            'fecha_fallo' => function ($value) {
                return $this->toTimeStamp($value);
            },//BN

            ////DECIMALES
            'monto_suficiencia_presupuestal_oficio' => function ($value) {
                return $this->toDecimal($value);
            },//AG2
            'monto_suficiencia_presupuestal_este_procedimiento' => function ($value) {
                return $this->toDecimal($value);
            },//AH2
            'monto_adjudicado_antes_impuestos' => function ($value) {
                return $this->toDecimal($value);
            },//BS
            'monto_adjudicado_impuestos_incluidos' => function ($value) {
                return $this->toDecimal($value);
            },//BT
            'monto_minimo_adjudicado_antes_impuestos' => function ($value) {
                return $this->toDecimal($value);
            },//BU
            'monto__minimo_adjudicado_impuestos_incluidos' => function ($value) {
                return $this->toDecimal($value);
            },//BV
            'monto_maximo_adjudicado_antes_impuestos' => function ($value) {
                return $this->toDecimal($value);
            },//BW
            'monto_maximo_adjudicado_impuestos_incluidos' => function ($value) {
                return $this->toDecimal($value);
            },//BX
            'plurianual' => function ($value) {
                return $value == "S";
            }
        ];
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
            'fecha_num_req_sol_inv_mer',//L2 EXCEL
            'num_of_cabcs_sol_im_cim',
            'fecha_num_of_cabcs_sol_im_cim',//N2
            'num_of_cim_ent_im_cabcs',
            'fecha_num_of_cim_ent_im_cabcs',//P2
            'numero_inv_mer',
            'num_of_cabcs_ent_im_a_req',
            'fecha_num_of_cabcs_ent_im_a_req',//S2
            'num_of_re_sol_pmr_a_cabcs',
            'fecha_num_of_re_sol_pmr_a_cabcs',//U2
            'num_of_cabcs_sol_pmr_a_cim',
            'fecha_num_of_cabcs_sol_pmr_a_cim', //W2
            'num_of_cim_ent_pmr_a_cabcs',
            'fecha_num_of_cim_ent_pmr_a_cabcs',//Y2
            'num_of_cabcs_ent_pmr_a_req',
            'fecha_num_of_cabcs_ent_pmr_a_req',//AA2
            'num_of_solicitud_contratacion',
            'fecha_num_of_solicitud_contratacion',//AC2
            'tipo_suficiencia_presupuestal',
            'num_of_suficiencia_presupuestal',
            'fecha_num_of_suficiencia_presupuestal',//AF2
            'monto_suficiencia_presupuestal_oficio',//AG2
            'monto_suficiencia_presupuestal_este_procedimiento',//AH2
            'tipo_contratacion',
            'caracter_contratacion',
            'fundamento_contratacion',
            'num_resolucion_cons_tec',
            'fecha_resolucion_cons_tec', //AM
            'plurianual',
            'criterio_evaluacion',
            'tipo_abastecimiento',
            'num_of_sol_testigo_social',
            'fecha_num_of_sol_testigo_social', //AQ
            'num_of_des_testigo_social',
            'fecha_num_of_des_testigo_social',//AT
            'fecha_publicacion_pre_conv_compranet',//AU
            'fecha_invitacion_sureco',//AV
            'fecha_celebracion_sureco',//AW
            'status_sureco',
            'num_of_solic_pub_conv_dof_jd',
            'fecha_num_of_solic_pub_conv_dof_jd',//AZ
            'fecha_publicacion_conv_dof',//BA
            'fecha_publicacion_conv_compranet',//BB
            'sdi_compranet',
            'numero_procedimiento',
            'fecha_inicial_junta_aclaraciones',//BF
            'fecha_final_junta_aclaraciones',//BG
            'fecha_pres_apertura_propo',//BH
            'forma_entrega_de_prop_req_eval',
            'num_of_ent_prop_req',
            'fecha_num_of_ent_prop_req',//BK
            'num_of_rec_eval_cabcs',
            'fecha_num_of_rec_eval_cabcs',//BM
            'fecha_fallo',//BN
            'proveedor_adjudicado',
            'rfc',
            'numero_proveedor',
            'total_partidas_adjudicadas',
            'monto_adjudicado_antes_impuestos',//BS
            'monto_adjudicado_impuestos_incluidos',//BT
            'monto_minimo_adjudicado_antes_impuestos',//BU
            'monto__minimo_adjudicado_impuestos_incluidos',//BV
            'monto_maximo_adjudicado_antes_impuestos',//BW
            'monto_maximo_adjudicado_impuestos_incluidos',//BX
        ];

        $this->chunk = 1;

    }

    public function toTimeStamp($value)
    {
        if (empty($value)) {
            return null;
        }

        return Carbon::createFromFormat('d/m/Y H:i', $value);
    }

    public function toDecimal($value)
    {
        $number = 0;
        if (empty($value)) {
            return null;
        }

        if (str_contains($value, ",")) {
            list($int, $decimal) = explode(",", $value);

            $int = intval(str_replace(".", '', $int));
            $decimal = ("." . $decimal);

            $number = $int + $decimal;
        } else {
            $number = floatval($value);
        }

        return $number;
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

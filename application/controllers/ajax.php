<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
        $this->load->model('lists_model');
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/

    /* PUBLIC FUNCTIONS
     **************************************************************************/

    /*
     * FUNCION get_combo: Muestra distintos listados
     *
     * id       => Indice
     * dataname => Nombre del listado
     * default  => El nombre opcion por defecto. Ejemplo: "Selccione una opcion"
     * name     => Es el nombre del combo
     * selected => La opcion por seleccionada
     * extra    => Atributos extra para la etiqueta select
     */
    public function get_combo(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $this->load->helper('form');
            
            $eval = '$list = $this->lists_model->get_'. $this->input->post('dataname') .'(';

            if( $this->input->post("id") ) $eval.= $this->input->post("id") . ',';
            $eval.= 'array(""=>"'. $this->input->post('default') .'"));';

            eval($eval);

            echo form_dropdown($this->input->post('name'), $list, $this->input->post('selected'), $this->input->post('extra'));
        }
    }

    /*
     * Devuelve la edad
     */
    public function get_age(){
        list($day, $month, $year) = explode("-", $this->input->post('date'));

        $year_dif = date("Y") - (int)$year;
        $month_dif = date("m") - (int)$month;
        $day_dif = date("d") - (int)$day;

        echo $year_dif;
        die();

        if ($day_dif < 0 || $month_dif < 0) $year_dif--;

        echo $year_dif;
    }


    /* PRIVATE FUNCTIONS
     **************************************************************************/

}
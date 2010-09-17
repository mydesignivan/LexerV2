<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
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
            $this->load->model('lists_model');
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
        echo calc_age(strtotime($this->input->post('date')));
    }

    /*
     * Muestra Form para la busqueda avanzada
     */
    public function showform_advsearch(){
        $this->load->view('frontpage/advsearch/'.$this->input->post('filename').'_view');
    }



    /* PRIVATE FUNCTIONS
     **************************************************************************/

}
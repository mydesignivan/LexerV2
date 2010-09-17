<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Controller{

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
        $this->load->library("simplelogin");
    }

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function index(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $statusLogin = $this->simplelogin->login($_POST["txtLoginUser"], $_POST["txtLoginPass"]);
            
            if( $statusLogin['status']=="error" ){
                if( $statusLogin['error']=="loginfaild" ){
                    $message = "El usuario y/o contrse&ntilde;a son incorrectos.";
                }elseif( $statusLogin['error']=="userinactive" ){
                    $message = "El usuario esta inactivo.";
                }
                $this->session->set_flashdata('message_login', $message);                
                redirect($this->config->item('base_url'));

            }else{

                if( $this->session->userdata('level')==0 ){
                    redirect('/paneluser/myaccount/');
                }else{
                    redirect('/paneladmin/index/');
                }
            }
        }
    }

    public function logout(){
        $this->simplelogin->logout();
        redirect($this->config->item('base_url'));
    }

}
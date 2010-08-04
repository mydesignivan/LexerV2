<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users_model extends Model {

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        parent::Model();
        $this->load->library('encpss');
    }

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function create(){

        $data = array(
            'users_type' => $this->input->post('cboUserType'),
            'email'      => $this->input->post('txtEmail'),
            'password'   => $this->encpss->encode($this->input->post('txtPass')),
            'newsletter' => $this->input->post('chkNewsletter'),
            'date_added' => date('Y-m-d H:i:s')
        );

        $res = $this->db->insert(TBL_USERS, $data);
        $id = $this->db->insert_id();

        return array('id'=>$id, 'result'=>$res);
    }

    public function get_info($id=null){

    }

    /* PUBLIC FUNCTIONS (LLAMADAS POR AJAX)
     **************************************************************************/
     public function check_exists($v, $id=null){
         $where = is_null($id) ? array('email'=>$v) : array('id<>'=>$id, 'email'=>$v);
         return $this->db->get_where(TBL_USERS, $where)->num_rows>0;
     }
    
}
?>
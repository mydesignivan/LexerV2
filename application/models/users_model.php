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

    public function rememberpass($field){
        $result = $this->db->get_where(TBL_USERS, "(email = '".$field."' or username='".$field."') and active=0");
        if( $result->num_rows >0 ) return array("status"=>"userinactive");

        $result = $this->db->get_where(TBL_USERS, "(email = '".$field."' or username='".$field."') and active=1");
        if( $result->num_rows==0 ) return array("status"=>"notexists");

        $data = $result->row_array();
        $data['token'] = uniqid(time());

        $this->db->where('user_id', $data['user_id']);
        if( !$this->db->update(TBL_USERS, array('token'=>$data['token'])) ){
            display_error(__FILE__, "rememberpass", ERR_DB_UPDATE, array(TBL_USERS));
        }

        return array("status"=>"ok", "data"=>$data);
    }

    public function activate($users_id){
        $result = $this->db->get_where(TBL_USERS, array('users_id'=>$users_id));
        if( $result->num_rows>0 ) {
            $row = $result->row_array();

            if( $row['active']==1 ) return false;

            $this->db->where('users_id', $users_id);
            if( !$this->db->update(TBL_USERS, array('active'=>1)) ) return false;
            return $row;

        }else return false;
    }

    /* PUBLIC FUNCTIONS (LLAMADAS POR AJAX)
     **************************************************************************/
     public function check_exists($v, $id=null){
         $where = is_null($id) ? array('email'=>$v) : array('id<>'=>$id, 'email'=>$v);
         return $this->db->get_where(TBL_USERS, $where)->num_rows>0;
     }
    
}
?>
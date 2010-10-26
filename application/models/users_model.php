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

    public function get_info($where=array()){
        $query = $this->db->get_where(TBL_USERS, $where);
        if( $query->num_rows>0 ){
            $row = $query->row_array();
            return $row;
        }else return false;
     }
     
    public function create(){

        $data = array(
            'users_type' => $this->input->post('cboUserType'),
            'email'      => $this->input->post('txtEmail'),
            'username'   => $this->input->post('txtUser'),
            'password'   => $this->encpss->encode($this->input->post('txtPass')),
            'newsletter' => $this->input->post('chkNewsletter'),
            'date_added' => date('Y-m-d H:i:s')
        );




        $res = $this->db->insert(TBL_USERS, $data);
        $id = $this->db->insert_id();

        $id_where=array("users_id"=>$id);
        switch($this->input->post('cboUserType')){
            case TBL_USERS_DEP:
                $this->db->insert(TBL_USERS_DEP, $id_where);
                $this->db->insert(TBL_USERS_DEP_DISC, $id_where);
                $this->db->insert(TBL_USERS_DEP_LANG, $id_where);
                $this->db->insert(TBL_PERFIL, $id_where);
            break;
            case TBL_USERS_PREPFIS:
                $this->db->insert(TBL_USERS_PREPFIS, $id_where);
            break;
            case TBL_USERS_REPR:
                $this->db->insert(TBL_USERS_REPR, $id_where);
                $this->db->insert(TBL_USERS_REPR_LANG, $id_where);
            break;
            case TBL_USERS_SPONSORS:
                $this->db->insert(TBL_USERS_SPONSORS, $id_where);
            break;
            case TBL_USERS_TRAINER:
                $this->db->insert(TBL_USERS_TRAINER, $id_where);
            break;
            case TBL_USERS_CLUB:
                $this->db->insert(TBL_USERS_CLUB, $id_where);
            break;
        }
        return array('id'=>$id, 'result'=>$res);
    }

     public function save(){
        $data = array(
            'email'   => $_POST['txtEmail'],
            'last_modified' => date('Y-m-d H:i:s'),
            'newsletter'=> $this->input->post('chkNewsletter')?1:0,
        );

        if( !empty($_POST['txtPass']) ){
            $data['password'] = $this->encpss->encode($_POST['txtPass']);
        }

        $this->db->where('users_id',$this->session->userdata('users_id'));
        return $this->db->update(TBL_USERS, $data);
     }



    public function get_pass(){
        $query = $this->db->get_where(TBL_USERS, array('email'=>$_POST['txtEmail'], 'active'=>1));
        if( $query->num_rows==0 ) return false;
        else{
            $row = $query->row_array();
            return $this->encpss->decode($row['password']);
        }
    }

    public function activate($users_id){
        $result = $this->db->get_where(TBL_USERS, array('users_id'=>$users_id));
        if( $result->num_rows>0 ) {
            $row = $result->row_array();

            if( $row['active']==1 ) return false;

            $this->db->where('users_id', $users_id);
            if( !$this->db->update(TBL_USERS, array('active'=>1)) ) return false;
            else {
                $this->db->insert($row['users_type'], array('users_id' => $users_id));
                mkdir(UPLOAD_PATH_GALLERY . $users_id);
                return $row;
            }
    
        }else return false;
    }

    /* PUBLIC FUNCTIONS (LLAMADAS POR AJAX)
     **************************************************************************/
     public function check_exists($v, $id=null){
         $where = is_null($id) ? array('username'=>$v) : array('users_id<>'=>$id, 'username'=>$v);
         return $this->db->get_where(TBL_USERS, $where)->num_rows>0;
     }
     public function check_exists_pass(){
       $users_id=$this->session->userdata('users_id');
     
        $info=$this->db->get_where(TBL_USERS, array("users_id"=>$users_id))->row_array();
        $passold=$this->encpss->decode($info["password"]);

        return $_POST['txtPassOld']==$passold;

     }


    
}
?>
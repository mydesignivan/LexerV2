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
    public function save(){
        $this->db->where('user_id', $this->session->userdata('user_id'));

        $data = array(
            'username'      => $_POST['txtUsername'],
            'email'         => $_POST['txtEmail'],
            'emailcv'       => $_POST['txtEmailCV'],
            'address1'      => $_POST['txtAddress1'],
            'address2'      => $_POST['txtAddress2'],
            'phone1'        => $_POST['txtPhone1'],
            'phone2'        => $_POST['txtPhone2'],
            'last_modified' => date('Y-m-d H:i:s')
        );

        if( !empty($_POST['txtPass']) ) $data['password'] = $this->encpss->encode($_POST['txtPass']);

        return $this->db->update(TBL_USERS, $data);
    }

    public function get_info($id=null){
        $where = array();
        if( !is_null($id) ) $where = array('user_id'=>$id);
        $query = $this->db->get_where(TBL_USERS, $where);
        return $query->row_array();
    }
    
}
?>
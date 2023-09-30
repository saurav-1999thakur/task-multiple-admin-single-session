<?php
class Auth_model extends CI_Model{
     
public function login_by_admin($login_id,$password){ 
    // echo "hello";die;
        $data = array('email'=>$login_id,'password'=>md5($password));
        // pr($data);die;
            $query = $this->db->select('*')->from('tbl_admin')->where($data)->get()->row_array();
            // pr($query);die;
            if(!empty($query)){
                $result = array('status'=>'Success','data'=>$query);
            }else{
                $result = array('status'=>'Failed','data'=>''); 
            }
            return $result;
    }
 
public function register_data($tablename, $data){
    $this->db->insert($tablename,$data);
    $last_id = $this->db->insert_id();
    // echo $last_id;die;
    return $last_id;
}

public function update_login($tablename, $id, $data){
    // $this->db->query("UPDATE `tbl_login` WHERE user_id = '".$id."'");
    $this->db->update($tablename, $data, array('user_id' => $id));
}

}
?>
<?php

class User Extends CI_Model{
    function create_user($data){
        $this->db->insert('users',$data);
    }
    function login($username,$password){
            $where=array(
                'username'=>$username,
                'password'=>sha1($password)
            );
            $this->db->select()->from('users')->where($where);
            $query=$this->db->get();
            return $query->first_row('array');

    }
    function get_userInfo($id){
        $this->db->select()->from('personal')->where('userID',$id);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function update_userlogininfo($id,$data){
        $this->db->where('userID',$id);
        $this->db->update('users',$data);
    }
    function update_userpersonalinfo($id,$data){
        $this->db->where('userID',$id);
        $this->db->update('personal',$data);
    }
    function delete_user($id){
        $this->db->where('id',$id);
        $this->db->delete('users');
    }
}
?>
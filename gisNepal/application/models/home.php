<?php

class Home extends CI_Model{

    function viewcount(){
        // $this->db->select('viewcount')->from('webusage');
         $this->db->select('viewcount')->from('webusage');
        $query = $this->db->get();
        return $query->result_array();

    }
    function incrementview(){
         $count = $this->viewcount();
         $this->db->where('id',1);
         $data_post=array(
                    'viewcount'=>$count[0]['viewcount']+1
                );
        $this->db->update('webusage',$data_post);
    }
    function get_home_count(){
        $this->db->select('id')->from('home');
        $query=$this->db->get();
        return $query->num_rows();
    }
    function get_home_slides(){
        $this->db->select()->from('home')->order_by('id','asc');
        $query = $this->db->get();
        return $query->result_array();
        // return array  return $query->result();

    }
    function get_home_slide($id){
        $this->db->select()->from('home')->where('id',$id);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function insert_home_slide($data){
        $this->db->insert('home',$data);
        return $this->db->insert_id();
    }
    function update_home_slide($id,$data){
        $this->db->where('id',$id);
        $this->db->update('home',$data);
    }
    function delete_home_slide($id){
        $this->db->where('id',$id);
        $this->db->delete('home');
    }
    //for client side
      function increment_view($id,$data){
        $this->db->where('id',$id);
        $this->db->update('webusage',$data);
    }
  


}
?>
<?php

class Product extends CI_Model{

    function get_product_count(){
        $this->db->select('id')->from('images');
        $query=$this->db->get();
        return $query->num_rows();
    }
    function get_all_products($num=20,$start=0,$orderby="date_added",$order="desc"){
    $this->db->select()->from('images')->order_by($orderby,$order)->limit($num,$start); //where category = $cat
        $query = $this->db->get();
        return $query->result_array();
        // return array  return $query->result();

       // $this->db->select()->from('images');

    }
 
     //get products by category
     function get_productsByCategory($num=20,$start=0,$cat=10,$orderby="date_added",$order="desc"){
       // $order = "desc";
        $this->db->select()->from('images')->where('categoryname',$cat)->order_by($orderby,$order)->limit($num,$start); //where category = $cat
        $query = $this->db->get();
        return $query->result_array();
        // return array  return $query->result();
    }


    
    function get_product($id){
        $this->db->select()->from('images')->where('id',$id);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function insert_product($data){
        $this->db->insert('images',$data);
        return $this->db->insert_id();
    }
    function update_product($id,$data){
        $this->db->where('id',$id);
        $this->db->update('images',$data);
    }
    function delete_product($id){
        $this->db->where('id',$id);
        $this->db->delete('images');
    }

}
?>
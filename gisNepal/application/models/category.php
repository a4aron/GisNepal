<?php

class Category extends CI_Model{

    function get_category_count(){
        $this->db->select('id')->from('imagecategory');
        $query=$this->db->get();
        return $query->num_rows();
    }
    function get_categories(){
        $this->db->select()->from('imagecategory')->order_by('id','asc');
        $query = $this->db->get();
        return $query->result_array();
        // return array  return $query->result();

    }
    function get_categoryById($id){
        $this->db->select()->from('imagecategory')->where('id',$id);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function get_categoryByCategory($cat){
        $this->db->select()->from('imagecategory')->where('category',$cat);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function insert_category($data){
        $this->db->insert('imagecategory',$data);
        return $this->db->insert_id();
    }
    function update_category($id,$data){
        $this->db->where('id',$id);
        $this->db->update('imagecategory',$data);
    }
    function delete_category($id){
        $this->db->where('id',$id);
        $this->db->delete('imagecategory');
    }

}
?>
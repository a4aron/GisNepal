<?php

class Article extends CI_Model{

    function get_article_count(){
        $this->db->select('id')->from('articles');
        $query=$this->db->get();
        return $query->num_rows();
    }
    
    function get_all_articles($num=20,$start=0,$orderby="date_added",$order="desc"){
    $this->db->select()->from('articles')->order_by($orderby,$order)->limit($num,$start); //where category = $cat
        $query = $this->db->get();
        return $query->result_array();
        // return array  return $query->result();

       // $this->db->select()->from('images');
    }
 
     //get articles by category
     function get_articlesByCategory($num=20,$start=0,$cat=10,$orderby="date_added",$order="desc"){
       // $order = "desc";
        $this->db->select()->from('articles')->where('categoryname',$cat)->order_by($orderby,$order)->limit($num,$start); //where category = $cat
        $query = $this->db->get();
        return $query->result_array();
        // return array  return $query->result(); 
    }


    
    function get_article($id){
        $this->db->select()->from('articles')->where('id',$id);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function get_articleByWriter($writer){
        $this->db->select()->from('articles')->like('writername',$writer);
        $query=$this->db->get();
        return $query->first_row('array');
    }
    function insert_article($data){
        $this->db->insert('articles',$data);
        return $this->db->insert_id();
    }
    function update_article($id,$data){
        $this->db->where('id',$id);
        $this->db->update('articles',$data);
    }
    function delete_article($id){
        $this->db->where('id',$id);
        $this->db->delete('articles');
    }
    //view count 
     function articleviewcount($id){
        // $this->db->select('viewcount')->from('webusage');
         $this->db->select('views')->from('articles')->where('id',$id);
        $query = $this->db->get();
        return $query->result_array();

    }
    function incrementarticleview($id){
         $count = $this->articleviewcount($id);
         $this->db->where('id',$id);
         $data_post=array(
                    'views'=>$count[0]['views']+1
                );
        $this->db->update('articles',$data_post);
    }

}
?>
<?php

class homepage extends CI_Controller{

    //every function is gonna load 'home' model
    function __construct(){
        parent::__construct();
       $this->load->model('home');
       $this->load->model('product');
       $this->load->model('article');

    }


//grab the home slides and display it in browser
    function index(){
       // $data['slides']=$this->home->get_home_slides();
        //echo"<pre>";print_r($data['slides']);echo"</pre>";
        $this->home->incrementview();
        $data['gallery']=$this->product->get_all_products($num=4,$start=0,$orderby="date_added",$order="desc");
        $data['articles']=$this->article->get_all_articles($num=4,$start=0,$cat=10,$orderby="views",$order="desc");
        $this->load->view('includes/header');
        $this->load->view('home',$data);
        $this->load->view('includes/footer');
    }


}

?>
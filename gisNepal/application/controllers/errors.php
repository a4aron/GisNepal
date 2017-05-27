  <?php

class articles extends CI_Controller{

    function __construct(){
        parent::__construct();

    }
  function index(){
             $this->load->view('includes/header');
             $this->load->view('errors/error');
             $this->load->view('includes/footer');

             


       
    }
}

?>
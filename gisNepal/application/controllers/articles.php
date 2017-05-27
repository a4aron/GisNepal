  <?php

class articles extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('article');
        $this->load->model('category');
    }
  function index($start=0){

 $data['cat']=$this->category->get_categories();
       
        if($_POST){
            $cat = $_POST['category'];
            $res=$this->category->get_categoryByCategory($cat);
            $cat_id = $res['id'];

            $orderby=$_POST['orderby'];
            $order=$_POST['order'];
            if($cat_id!=1){
                 $data['result']=$this->article->get_articlesByCategory(30,$start,$cat_id,$orderby,$order);
            }
            else
            {
                 $data['result']=$this->article->get_all_articles(30,$start,$orderby,$order);
            }
            // $data['result']=$this->product->get_all_products();
            
            //echo"<pre>";print_r($data['result']);echo"</pre>";
              $this->load->view('includes/header');
             $this->load->view('article',$data);
             $this->load->view('includes/footer');
            }
            //if not post ..by default display all
            else{
                 $data['result']=$this->article->get_all_articles(30,$start,"date_added","desc");
             //$data['result']=$this->product->get_all_products();
        //echo"<pre>";print_r($data['result']);echo"</pre>";

                    // $this->load->library('pagination');
                   //$config['base_url']=base_url().'products/index/';
                    //$config['total_rows']=$this->product->get_product_count();
                    //$config['per_page']=4; 
                    //$this->pagination->initialize($config);
                    //$data['pages']=$this->pagination->create_links();

             $this->load->view('includes/header');
             $this->load->view('article',$data);
             $this->load->view('includes/footer');
            }
         }
             
    function displayarticle($ID){
            $data['row']= $this->article->get_article($ID);
            $this->article->incrementarticleview($ID);
              // $this->load->view('includes/header');
        $this->load->view('fullarticle',$data);
        //$this->load->view('includes/footer');

         }

       
    }

?>
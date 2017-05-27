<?php 

class admins extends CI_Controller{

    //every function is gonna load 'post' model
    function __construct(){
        parent::__construct();
        $this->load->model('home');
        $this->load->model('article');
        $this->load->model('category');
        $this->load->model('product');
        $this->load->model('article');

    }

function profile(){
    if($this->session->userdata('userID')){
    $id = $this->session->userdata('userID');
     } 
     else
     {
        redirect(base_url()."users/login");
     }
    $this->load->model('user');
    $data['info'] = $this->user->get_userInfo($id);
     $this->load->view('includes/adminheader');
    $this->load->view('admin/profile',$data);
        $this->load->view('includes/adminfooter');

}
     function editprofile($ID){
            if($_POST){
                //user le pathako data from form
                $data_post=array(
                    'fname'=>$_POST['fname'],
                    'lname'=>$_POST['lname'],
                    'address'=>$_POST['address'],
                    'about'=>$_POST['about'],
                    'email'=>$_POST['email'],
                    'phone'=>$_POST['phone'],
                );
                 $this->load->model('user');
                $this->user->update_userpersonalinfo($ID,$data_post);
                $data['success']=1; //update success

                 
                redirect(base_url()."admins/profile");
               
               // $this->load->view('admins/profile',$data);
            }
           
       
        } function changepassword(){
            if($_POST){
                 $this->load->model('user');
                 if($_POST['password']!=$_POST['repassword'])
                        {
                              $data['error'] = "Retype password dont match";
                        } 
                else{
            //if password n retyped password match

                     $where=array(
                    'username'=>$this->session->userdata('username'),
                      'password'=>sha1($_POST['oldpassword'])
                    );
                    $this->db->select()->from('users')->where($where);
                    $query=$this->db->get();
                     // if old password  matches update password
                    if($query->num_rows() > 0){
                        $data_post=array(
                            'password'=>sha1($_POST['password']),
                          );
                    $this->user->update_userlogininfo($this->session->userdata('userID'),$data_post);
                    $data['success']=1; //update success
                        
                    }
                    else
                    {
                         $data['error'] = "Incorrect Password";
                    }
                }
                $this->load->view('includes/adminheader');
                $this->load->view('admin/changepassword',$data);
                $this->load->view('includes/adminfooter');


               }
               else {
               // $this->load->view('admins/profile',$data);
                 $this->load->view('includes/adminheader');
                $this->load->view('admin/changepassword');
                $this->load->view('includes/adminfooter');
            }
        }
        
        
     
//Dashboard Content
    function index(){
      //Essentials
        //map div
        //link to arcgis online account
        //total number of views and other stats
        $data['view']=$this->home->viewcount();
        $data['article_count']=$this->article->get_article_count();
        $data['category_count']=$this->category->get_category_count();
        $data['image_count']=$this->product->get_product_count();
        $this->load->view('includes/adminheader');
        $this->load->view('admin/indexx',$data);
        $this->load->view('includes/adminfooter');
    }  

    //***************************************** Map Gallery *******************************
     //add image
     function addtogallery()    {
        //if new data submitted from form then
       {
            //redirect to page where the form is
            //get all categories first 
            $data['cat']=$this->category->get_categories();
             $this->load->view('includes/adminheader');
             $this->load->view('admin/addtogallery',$data);
             $this->load->view('includes/adminfooter');
           
        }
    }
    function do_upload(){
        //configuration
        $config['upload_path']='./uploads';
        $config['allowed_types']='gif|jpg|png';
        //$config['max_size']='100';
        //$config['max_width']='1024';
        //$config['max_height']='768';
        //load the library with configuration attached to it
        $this->load->library('upload',$config);
        //if upload doesn't succeed, forward error to view
        if(!$this->upload->do_upload()){
            $error = array('error'=>$this->upload->display_errors());
            $this->load->view('admin/addtogallery',$error);
        }
        //else forward data to view
        else {
            $data = array('upload_data'=>$this->upload->data()); //uploaded here
            //CREATING THUMBNAIL
            $this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
          //  $thumb = basename($data['upload_data']['full_path'],'jpg');
            $thumb = array_pop(array_reverse(explode(".",$data['upload_data']['file_name'])));
            //retrieving image category from category table
            
            $cat = $_POST['category'];
            $res=$this->category->get_categoryByCategory($cat);
            $realimage = $data['upload_data']['file_name'];
           $cat_id = $res['id'];
           echo "<h1>".$thumb."</h1>";
            if($_POST){
                //user le pathako data from form
                $data_post=array(
                    'imagename'=>$realimage,
                    'thumbnail'=>$thumb."_thumb.jpg",
                    'categoryname'=>$cat_id,
                    'iname'=>$_POST['imagename'],
                    'description'=>$_POST['description']
                );
                     $this->product->insert_product($data_post);
            //redirect them to the indexpage so let them see the content is added
           redirect(base_url()."admins/redirectToaddpage");
                    
        }
        }
    }
           
        function redirectToaddpage(){
            $result['success']=1;
            $result['cat']=$this->category->get_categories();

            $this->load->view('includes/adminheader');
             $this->load->view('admin/addtogallery',$result);
             $this->load->view('includes/adminfooter');

        }
    //@param (where original image is located,filename)
    function resize($path,$file){
        $config['image_library']='gd2';
        $config['source_image']=$path;
        $config['create_thumb']=TRUE;
        $config['maintain_ratio']=TRUE;
        $config['width']=300; //max width
        $config['height']=200; //max height
        $config['new_image']='./uploads/'.$file; //where thumbnail is saved
        //load image library
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
    }

    //Manage gallery
    function managegallery($start=0){
        $data['cat']=$this->category->get_categories();
       
        if($_POST){
            $cat = $_POST['category'];
            $res=$this->category->get_categoryByCategory($cat);
            $cat_id = $res['id'];

            $orderby=$_POST['orderby'];
            $order=$_POST['order'];
            if($cat_id!=1){
                 $data['result']=$this->product->get_productsByCategory(50,$start,$cat_id,$orderby,$order);
                 $data['categoryname']=$cat;
            }
            else
            {
                 $data['result']=$this->product->get_all_products(50,$start,$orderby,$order);
                 $data['categoryname']='All';
                 
            }
            // $data['result']=$this->product->get_all_products();
            
            //echo"<pre>";print_r($data['result']);echo"</pre>";
              $this->load->view('includes/adminheader');
             $this->load->view('admin/managegallery',$data);
             $this->load->view('includes/adminfooter');
            }
            //if not post ..by default display all
            else{
                 $data['result']=$this->product->get_all_products(50,$start,"date_added","desc");
                 $data['categoryname']='All';
             //$data['result']=$this->product->get_all_products();
        //echo"<pre>";print_r($data['result']);echo"</pre>";

                    // $this->load->library('pagination');
                   //$config['base_url']=base_url().'products/index/';
                    //$config['total_rows']=$this->product->get_product_count();
                    //$config['per_page']=4; 
                    //$this->pagination->initialize($config);
                    //$data['pages']=$this->pagination->create_links();

             $this->load->view('includes/adminheader');
             $this->load->view('admin/managegallery',$data);
             $this->load->view('includes/adminfooter');
            }
    }
    //edit gallery image detail
    function editgallery($ID){
        $data['cat']=$this->category->get_categories();
            if($_POST){
                 $cat = $_POST['category'];
                $res=$this->category->get_categoryByCategory($cat);
               $cat_id = $res['id'];
                //user le pathako data from form
               $data_post=array(
                    'categoryname'=> $cat_id,
                    'iname'=>$_POST['imagename'],
                    'description'=>$_POST['description']
                );
                     $this->product->update_product($ID,$data_post);
                     $data['success']=1;
                         }
            $data['product']=$this->product->get_product($ID);
             $this->load->view('includes/adminheader');
        $this->load->view('admin/editgallery',$data);
        $this->load->view('includes/adminfooter');
            //$this->load->view('test');
            
        }
        //delete image
         function deletegallery($ID){
            //use javacript to prompt
            $this->product->delete_product($ID);
            redirect(base_url()."admins/managegallery");

        }
 

 // **************************** ARTICLES ********************************************

 //add new article
     function add_article()    {
        //if new data submitted from form then
       {
            //redirect to page where the form is
            //get all categories first 
            $data['cat']=$this->category->get_categories();
             $this->load->view('includes/adminheader');
             $this->load->view('admin/addarticle',$data);
             $this->load->view('includes/adminfooter');
           
        }
    }
   
  function do_upload_article(){
        //configuration
        $config['upload_path']='./uploads/article';
        $config['allowed_types']='gif|jpg|png';
        //$config['max_size']='100';
        //$config['max_width']='1024';
        //$config['max_height']='768';
        //load the library with configuration attached to it
        $this->load->library('upload',$config);
        //if upload doesn't succeed, forward error to view
        if(!$this->upload->do_upload()){
            $error = array('error'=>$this->upload->display_errors());
            $this->load->view('admin/addarticle',$error);
        }
        //else forward data to view
        else {
            $data = array('upload_data'=>$this->upload->data()); //uploaded here
            //CREATING THUMBNAIL
            $this->resizeArticle($data['upload_data']['full_path'],$data['upload_data']['file_name']);
          //  $thumb = basename($data['upload_data']['full_path'],'jpg');
            $thumb = array_pop(array_reverse(explode(".",$data['upload_data']['file_name'])));
            //retrieving image category from category table
            
            $cat = $_POST['category'];
            $res=$this->category->get_categoryByCategory($cat);
            $realimage = $data['upload_data']['file_name'];
           $cat_id = $res['id'];
           echo "<h1>".$thumb."</h1>";
            if($_POST){
                //user le pathako data from form
                $data_post=array(
                    'topic'=>$_POST['topic'],
                    'writername'=>$_POST['writername'],
                    'abstract' =>$_POST['abstract'],
                    'coverimage'=>$realimage,
                    'thumbnail'=>$thumb."_thumb.jpg",
                    'categoryname'=>$cat_id,
                    'content'=>$_POST['description']
                );
                     $this->article->insert_article($data_post);
            //redirect them to the indexpage so let them see the content is added
           redirect(base_url()."admins/redirectToAddArticle");
                    
        }
        }
    }
           
        function redirectToAddArticle(){
            $result['success']=1;
            $this->load->view('includes/adminheader');
             $this->load->view('admin/addarticle',$result);
             $this->load->view('includes/adminfooter');

        }
         function resizeArticle($path,$file){
        $config['image_library']='gd2';
        $config['source_image']=$path;
        $config['create_thumb']=TRUE;
        $config['maintain_ratio']=TRUE;
        $config['width']=300; //max width
        $config['height']=200; //max height
        $config['new_image']='./uploads/article/'.$file; //where thumbnail is saved
        //load image library
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
    }
         //Manage gallery
    function manage_article($start=0){
        $data['cat']=$this->category->get_categories();
       
        if($_POST){
            $cat = $_POST['category'];
            $res=$this->category->get_categoryByCategory($cat);
            $cat_id = $res['id'];

            $orderby=$_POST['orderby'];
            $order=$_POST['order'];
            if($cat_id!=1){
                 $data['result']=$this->article->get_articlesByCategory(50,$start,$cat_id,$orderby,$order);
                 $data['categoryname']=$cat;
            }
            else
            {
                 $data['result']=$this->article->get_all_articles(50,$start,$orderby,$order);
                 $data['categoryname']='All';
                 
            }
            // $data['result']=$this->product->get_all_products();
            
            //echo"<pre>";print_r($data['result']);echo"</pre>";
              $this->load->view('includes/adminheader');
             $this->load->view('admin/managearticle',$data);
             $this->load->view('includes/adminfooter');
            }
            //if not post ..by default display all
            else{
                 $data['result']=$this->article->get_all_articles(50,$start,"date_added","desc");
                 $data['categoryname']='All';
             //$data['result']=$this->product->get_all_products();
        //echo"<pre>";print_r($data['result']);echo"</pre>";

                    // $this->load->library('pagination');
                   //$config['base_url']=base_url().'products/index/';
                    //$config['total_rows']=$this->product->get_product_count();
                    //$config['per_page']=4; 
                    //$this->pagination->initialize($config);
                    //$data['pages']=$this->pagination->create_links();

             $this->load->view('includes/adminheader');
             $this->load->view('admin/managearticle',$data);
             $this->load->view('includes/adminfooter');
            }
    }
    //edit gallery image detail
    function edit_article($ID){
        $data['cat']=$this->category->get_categories();
            if($_POST){
                 $cat = $_POST['category'];
                 $data['category_name']=$cat; //to send to editarticle
                $res=$this->category->get_categoryByCategory($cat);
               $cat_id = $res['id'];
                //user le pathako data from form
                 //change image chaina aile lai... 
               $data_post=array(
                    'categoryname'=> $cat_id,
                    'topic'=>$_POST['topic'],
                    'writername'=>$_POST['writername'],
                    'abstract' =>$_POST['abstract'],
                    'content'=>$_POST['description']
                );
                     $this->article->update_article($ID,$data_post);
                     $data['success']=1;
                         }
            $data['article']=$this->article->get_article($ID);
             $this->load->view('includes/adminheader');
        $this->load->view('admin/editarticle',$data);
        $this->load->view('includes/adminfooter');
            //$this->load->view('test');
            
        }
        //delete image
         function delete_categoryarticle($ID){
            //use javacript to prompt and unlink as well
            $this->article->delete_article($ID);
            redirect(base_url()."admins/manage_article");

        }
       
 
//****************************** CATEGORY *****************************************

//function to manage categories

        function managecategory(){
             $data['categories']=$this->category->get_categories();
       // echo"<pre>";print_r($data['categories']);echo"</pre>";
        //login ma janu parne khaas but later

        $this->load->view('includes/adminheader');
        $this->load->view('admin/manage_category',$data);
        $this->load->view('includes/adminfooter');


        }
        //add category
       function newcategory()    {
        //if new data submitted from form then
       if($_POST){
                //user le pathako data from form
                $data_post=array(
                    'id'=>$_POST['id'],
                    'category'=>$_POST['category']
                    
                );
                 $this->category->insert_category($data_post);
            //redirect them to the indexpage so let them see the content is added
            redirect(base_url()."admins/managecategory");
        } else {
            //redirect to page where the form is
            $this->load->view('includes/adminheader');
            $this->load->view('admin/add_category');
             $this->load->view('includes/adminfooter');
           
        }
    }

// Edit  Category types
//edit categores 
   
    function editcategory($ID){
            if($_POST){
                //user le pathako data from form
                $data_post=array(
                   'id'=>$_POST['id'],
                    'category'=>$_POST['category']
                    
                );
                $this->category->update_category($ID,$data_post);
                $data['success']=1; //update success
            }
            $data['category']=$this->category->get_categoryById($ID);
        $this->load->view('includes/adminheader');
        $this->load->view('admin/edit_category',$data);
        $this->load->view('includes/adminfooter');
            
        }
        //delete category
         function deletecategory($ID){
            //use javacript to prompt
            $this->category->delete_category($ID);
            redirect(base_url()."admins/managecategory");

        }

  
}
?>
<?php

class Users Extends CI_Controller{

    function login(){

        $data['error']=0;
        if($_POST) {
            $this->load->model('user');
            $username = $this->input->post('username', true); //LIKE $_POST
            $password = $this->input->post('password', true);
            $user = $this->user->login($username, $password);
            if (!$user) {
                $data['error'] = 1;
            } else {
                $this->session->set_userdata('userID', $user['userID']);
                $this->session->set_userdata('username', $user['username']);
                $personal = $this->user->get_userInfo($user['userID']);
                //print_r($personal);
                $this->session->set_userdata('personal',$personal);
                redirect(base_url() . 'admins');
            }
        }
        //$this->load->view('header');
        $this->load->view('admin/login', $data);
        //$this->load->view('footer');

    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'users/login');
        //more info on CLassreference->Session class
    }

    function register(){

        if($_POST){

            $config = array(
                array(
                    'field'=>'username',
                    'label'=>'Username',
                    'rules'=>'trim|required|min_length[3]|isunique[users.username]'
                ),
                array(
                    'field'=>'password',
                    'label'=>'Password',
                    'rules'=>'trim|required|min_length[8]'
                ),
                array(
                    'field'=>'repass',
                    'label'=>'Retype Password',
                    'rules'=>'trim|required|min_length[8]|matches[password]'
                ),
                array(
                    'field'=>'email',
                    'label'=>'Email',
                    'rules'=>'trim|required|is_unique[users.email]|valid_email'
                ),

            );
            $this->load->library('form_validation');
            $this->form_validation->set_rules($config);
            if($this->form_validation->run()==FALSE){
                $data['errors']=validation_errors();
            }
            else {
                $data = array(
                    'username' => $_POST['username'],
                    'password' => sha1($_POST['password']),
                    'email'=>$_POST['email']
                    //'user_type' => $_POST['user_type']//optional
                );
                $this->load->model('user');
                $userid = $this->user->create_user($data);
                $this->session->set_userdata('userID', $userid);
                $this->session->set_userdata('user_type', $_POST['user_type']);
                redirect(base_url() . 'posts');
            }
        }
        $this->load->helper('form');
        //$this->load->view('header');
        $this->load->view('register_user');
        //$this->load->view('footer');

    }
}
?>
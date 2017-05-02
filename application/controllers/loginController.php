<?php

class loginController extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('loginModel');
        $this->load->model('profileModel');
    }

    public function index(){
        $this->load->view('giris');
    }

    public function checkUser(){

        $userEmail = $this->input->post('logemail');
        $userPassword = md5($this->input->post('logpassword'));


        $this->loginModel->login($userEmail,$userPassword);

            if ($this->loginModel->login($userEmail, $userPassword)) {


                

                $_SESSION['login'] = TRUE;
          
            // profileController start
                $user = $this->profileModel->user($userEmail);


                foreach ($user as $model)
                    $_SESSION['user'] = $model;

            // profileController end

                redirect(base_url('profileController'));


            } else {
                redirect(base_url('loginController'));
            }


    }

    public function logout()
    {
        if (isset($_SESSION['login']))
            unset($_SESSION['login']);
        redirect(base_url('loginController'));

    }


}
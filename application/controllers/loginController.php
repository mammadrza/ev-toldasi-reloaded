<?php

class loginController extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('loginModel');
    }

    public function index(){
        $this->load->view('giris');
    }

    public function checkUser(){

        $userEmail = $this->input->post('logemail');
        $userPassword = $this->input->post('logpassword');


        $this->loginModel->login($userEmail,$userPassword);

            if ($this->loginModel->login($userEmail, $userPassword)) {

                redirect(base_url('homeController/profil'));

            } else {
                redirect(base_url('loginController'));
            }


    }


}
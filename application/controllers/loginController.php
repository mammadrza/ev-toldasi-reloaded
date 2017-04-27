<?php

class loginController extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('giris');
    }

    public function checkUser(){

        $userEmail = $this->input->post('logemail');
        $userPassword = $this->input->post('logpassword');

    }


}
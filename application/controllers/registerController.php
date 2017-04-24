<?php

class RegisterController extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index(){
        $this->load->view('registr');
    }

    public function insert(){



    }


}
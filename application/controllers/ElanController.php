<?php

class ElanController extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ElanModel');
    }

//    public function index(){
//        $this->load->view('ElanYerlesdir');
//    }


    public function getCityData(){

        $citydata = $this->ElanModel->getCity();

        $this->load->view('ElanYerlesdir');


    }


}
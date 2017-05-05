<?php

class adsController extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('adsModel');
    }

    public function index(){


        $viewData['city_list'] = $this->db->get('city')->result();
        $viewData['hometype_list'] = $this->db->get('home_types')->result_array();
        $viewData['rooms_list'] = $this->db->get('rooms')->result_array();

        $this->load->view('ElanYerlesdir', $viewData);
    }

    public function get_metros()
    {
        $this->input->post('townlist');
        $this->input->post('metrolist');
        $towns = $this->adsModel->get_towns();
        $metros = $this->adsModel->get_metros();
        if (count($towns) && count($metros)) {
            $m = "<option>Siyahidan secin</option>";
            $t = "<option>Siyahidan secin</option>";
            foreach ($metros as $metro) {
                $m .= "<option value= $metro->id >$metro->mark_name</option>";
            }
            foreach ($towns as $town) {
                $t .= "<option value= $town->id >$town->towns_name</option>";
            }
            echo json_encode(["town" => $t, 'metro' => $m]);
        }

    }

//    public function ads(){
//
//        $hometype = $this->input->post('hometype');
//        $citylist = $this->input->post('citylist');
//        $townlist = $this->input->post('townlist');
//        $metrolist = $this->input->post('metrolist');
//        $price = $this->input->post('price');
//        $roomlist = $this->input->post('roomlist');
//        $adress = $this->input->post('adress');
//        $comment = $this->input->post('comment');
//        $adsusername = $this->input->post('contact');
//        $adsuserphone = $this->input->post('phone');
//        $adsuseremail = $this->input->post('email');
//
//
//        $viewData = array(
//            'userdb_id' => $_SESSION['user']->id,
//            'home_type_id' => $hometype,
//            'city_id' => $citylist,
//            'towns_id' => $townlist,
//            'mark_id' => $metrolist,
//            'rooms_id' => $roomlist,
//            'ads_price' => $price,
//            'ads_address' => $adress,
//            'ads_about' => $comment,
//            'ads_user_name' => $adsusername,
//            'ads_user_phone' => $adsuserphone,
//            'ads_user_email' => $adsuseremail
//        );
//
//        $this->adsModel->addToAds($viewData);
//
//    }


}
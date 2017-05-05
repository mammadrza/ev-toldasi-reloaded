<?php

class adsModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();

    }

    public function addToAds($viewData){

        $this->db->insert('ads', $viewData);

    }

    public function get_towns()
    {
        $result = $this->db->get('towns');
        return $result->result();
    }

    public function get_metros()
    {
        $result = $this->db->get('mark');
        return $result->result();
    }


}
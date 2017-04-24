<?php

class RegisterModul extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function insert($data){

        $this->db->insert('usersdb',$data);
    }


}
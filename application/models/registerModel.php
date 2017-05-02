<?php

class RegisterModel extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function insert($data){

        $this->db->insert('usersdb',$data);
    }


    public function checkEmail($email){

        $result = $this->db->where("user_email",$email)->get('usersdb')->result();
        return $result;

    }









}
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

//        public function checkEmail1($email)
//        {
//            $this->db->select('user_email');$this->db->from('usersdb');$this->db->where('user_email', $email);$checkemail = $this->db->get();
//            return $checkemail->result();
//        }








}
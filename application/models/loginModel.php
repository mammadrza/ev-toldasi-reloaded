<?php

class loginModel extends CI_Model{


    public function __construct()
    {
        parent::__construct();
    }

    public function login($userEmail , $userPassword)
    {


        $this->db->select('id' , 'user_email' , 'user_pass');
        $this->db->from('usersdb');
        $this->db->where('user_email' , $userEmail);
        $this->db->where('user_pass' , $userPassword);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }

    }

}
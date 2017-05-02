<?php

class profileModel extends CI_Model{


//    public function updateUserDataId($useremail){
//        $query = "SELECT * FROM `usersdb` WHERE id = (SELECT id FROM `usersdb` WHERE user_email = '$useremail')";
//
//        $result = $this->db->query($query);
//        return $result;
//
//
//    }


//    public function select(){
//
//
//
//    }

    public function user($userEmail){
       $select = $this->db->where('user_email', $userEmail)->get('usersdb')->result();
       return $select;
    }











}
<?php

class updateProfileModel extends CI_Model{

//        public function getData($id){  //$id = $this->uri->segment(3) --------->$id tapmagin 2ci yolu. functionun alt setiri
//            $row = $this->db->where('id', $id)->get('usersdb')->row();
//            return $row;
//        }

    public function getData($id){  //$id = $this->uri->segment(3) --------->$id tapmagin 2ci yolu. functionun alt setiri
        $row = $this->db
            ->where('id', $id)->get('usersdb')->row();
        return $row;
    }



        public function updateQuery($data, $id){
            $update=$this->db->where('id', $id)->update('usersdb',$data);
            return $update;
        }




}
<?php

class updateProfileModel extends CI_Model{

//editProf sehifesine gelecek datalar    start

        public function getData($id){  //$id = $this->uri->segment(3) --------->$id tapmagin 2ci yolu. functionun alt setiri
            $row = $this->db->where('id', $id)->get('usersdb')->row();
            return $row;

//editProf sehifesine gelecek datalar    end
        }


        public function updateQuery($data, $id){
            $update=$this->db->where('id', $id)->update('usersdb',$data);
            return $update;
        }




}
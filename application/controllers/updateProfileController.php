<?php

class updateProfileController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('updateProfileModel');
        $this->load->library('form_validation');

        $config = array(
           array(
                'field' => 'userName',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => 'require '
            ),
           array(
                'field' => 'surname',
                'label' => 'Surname',
                'rules' => 'required',
                'errors' => 'require '
            ),
//            array(
//                'field' => 'regPassword',
//                'label' => 'Password',
//                'rules' => 'required',
//                'errors' => 'require '
//            ),
           array(
                'field' => 'phone',
                'label' => 'Phone number',
                'rules' => 'required',
                'errors' => 'require '
            ),
//           array(
//                'field' => 'email',
//                'label' => 'Email',
//                'rules' => 'required',
//                'errors' => 'require '
//            ),
           array(
                'field' => 'birthday',
                'label' => 'Birthday Date',
                'rules' => 'required',
                'errors' => 'require '
            ),

           array(
                'field' => 'city',
                'label' => 'City',
                'rules' => 'required',
                'errors' => 'require '
            )
//            array(
//                'field' => 'regUniversity',
//                'label' => 'University',
//                'rules' => 'required',
//                'errors' => 'require '
//            )
        );
        $this->form_validation->set_rules($config);
    }

    public function get($id){


        $city = $this->db->get('city')->result();
        $univerler = $this->db->get('university')->result();

        $data = array(
           'city' => $city,
           'univerler' => $univerler
        );

        $data['user_data'] = $this->updateProfileModel->getData($id);
        $this->load->view('editProf',$data);


    }
//    private function getUserData($id){
//        $this->load->model('updateProfileModel');
//        $result = $this->updateProfileModel->getData($id);
//        return $result;
//    }



//---------------------------------------------------------------


    public function update($id)
    {
        if ($this->form_validation->run() != FALSE) {

            $name = $this->input->post('userName');
            $surname = $this->input->post('surname');
            $city = $this->input->post('city');
            $univer = $this->input->post('univer');
            $phone = $this->input->post('phone');
//            $email = $this->input->post('email');
            $birthday = $this->input->post('birthday');
//var_dump($_SESSION['user']);
//die();
            $data = array(

                'user_name' => $name,      //'user_name' db-deki columlarin adlaridir.
                'user_surname' => $surname,
                'user_adress' => $city, //qowulmayib
                'user_phone' => $phone,
//                'user_email' => $email,
                'user_bdate' => $birthday,
                'user_university_id'  => $univer //qowulmayib

            );
//        $this->load->model('updateProfileModel');
//sd
            $update = $this->updateProfileModel->updateQuery($data, $id);


//  sessionu yenilemek   start
            $_SESSION['user']->user_name =    $data['user_name'];
            $_SESSION['user']->user_surname = $data['user_surname'];

            $_SESSION['user']->user_adress =  $data['user_adress'];
            $_SESSION['user']->user_phone =   $data['user_phone'];
            $_SESSION['user']->user_email =   $data['user_email'];
            $_SESSION['user']->user_bdate =   $data['user_bdate'];
            $_SESSION['user']->user_university_id  = $data['user_university_id']; //qowulmayib

//  sessionu yenilemek   end


            if ($update) {
                redirect(base_url('profileController'));

            } else {
                redirect(base_url('updateProfileController/get/' . $_SESSION['user']->id));
            }
//        updateProfileController/get/


        }else{
            $city = $this->db->get('city')->result();
            $univerler = $this->db->get('university')->result();

            $data = array(
                'city' => $city,
                'univerler' => $univerler
            );

            $data['user_data'] = $this->updateProfileModel->getData($id);
            $this->load->view('editProf',$data);

        }

    }


}

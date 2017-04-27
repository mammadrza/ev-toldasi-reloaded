<?php

class RegisterController extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('registerModel');
        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'regUserName',
                'label' => 'Username',
                'rules' => 'required',
                'errors' => 'require '
            ),
            array(
                'field' => 'regSurname',
                'label' => 'Surname',
                'rules' => 'required',
                'errors' => 'require '
            ),
            array(
                'field' => 'regPassword',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => 'require '
            ),
            array(
                'field' => 'regPhoneNumber',
                'label' => 'Phone number',
                'rules' => 'required',
                'errors' => 'require '
            ),
            array(
                'field' => 'regEmail',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => 'require '
            ),
            array(
                'field' => 'regBirthday',
                'label' => 'Birthday Date',
                'rules' => 'required',
                'errors' => 'require '
            ),

            array(
                'field' => 'regGender',
                'label' => 'Gender',
                'rules' => 'required',
                'errors' => 'require '
            )
        );
        $this->form_validation->set_rules($config);
    }

    public function index(){
        $this->load->view('registr');
    }

    public function insert(){

        if ($this->form_validation->run() != FALSE) {

        $name                = $this->input->post('regUserName');
        $surname             = $this->input->post('regSurname');
        $password            = $this->input->post('regPassword');
        $regoperator_numbers = "+994" . $this->input->post('regOperatorNumbers') . "" . $this->input->post('regPhoneNumber');
        $email               = $this->input->post('regEmail');
        $bdate               = $this->input->post('regBirthday');
        $gender              = $this->input->post('regGender');

        if(strlen($password) >= 6){

            if($bdate < strtotime('2017-04-24')){

                if(strlen($regoperator_numbers)==13){

                              if (!$this->registerModel->checkEmail($email)) {

                                          $data = array(
                                              'user_name'    => $name,
                                              'user_surname' => $surname,
                                              'user_pass'    => md5($password),
                                              'user_phone'   => $regoperator_numbers,
                                              'user_email'   => $email,
                                              'user_bdate'   => $bdate,
                                              'user_gender'  => $gender //qowulmayib
                                          );

                                          $this->registerModel->insert($data);
                                          redirect(base_url('loginController'));

                                }else{
                                $_SESSION['invalidemail'] = "Email artiq istifade edilir";
                                    redirect(base_url('registerController'));
                                }

                }else{
                    $_SESSION['invalidphonenumber'] = "Telefon nömrəsi 7 rəqəmli olmalıdır.";
                    redirect(base_url('registerController'));}

            }else{
                $_SESSION['invalidbdate'] = "Dogum tarixini duzgun daxil edin.";
                redirect(base_url('registerController'));}

        }else{
            $_SESSION['passwordlong'] = "Şifrə 6-dan kiçik ola bilməz.";
            redirect(base_url('registerController'));}

        }
        else {
            $this->load->view('registr');
        }




    }






}
<?php

class SendMail extends CI_Controller{

//    function __construct()
//    {
//        parent::__construct();
//        $this->load->model('registerModel');
//        $this->load->library('email');
//    }

    //    mail gondermek metodu

    //2ci mailimiz
    //mail : testevyoldasi@gmail.com  //
    //pass : evyoldasi123  //

    public function index(){

        $config = array(
            "protocol"  => "smtp",
            "smtp_host" => "ssl://smtp.gmail.com",
            "smtp_port" => "465",                                      //587   // 25
            "smtp_user" => "evyoldasi@gmail.com",                      //usermail
            "smtp_pass" => "kablosuz123",         //userpass             kablosuz123
            "starttls"  => TRUE,
            "charset"   => "utf-8",
            "mailtype"  => "html",
            "wordwrap"  => TRUE,
            "newline"   => "\r\n",
        );

        $this->load->library("email", $config);

        $this->email->from("evyoldasi@gmail.com", "bruno");   //usermail anad name
        $this->email->to("testevyoldasi@gmail.com");            //adminmail
        $this->email->subject("mesajim");
        $this->email->message("ev yoldasi projesinin ilk test mesaji");

        $this->email->send();



        if($this->email->send()){

            echo "<span style='color:green'>mesaj ugurlu gonderilmisdir!</span>";

        }else{

            echo "<span style='color:red'>mesaj gonderilmedi!</span>";
            echo "<hr>";
            echo show_error($this->email->print_debugger());
            
        }


    }




}
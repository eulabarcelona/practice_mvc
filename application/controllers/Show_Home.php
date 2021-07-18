<?php

class Show_Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function welcome_page(){
        $this->load->view('welcome'); 
    }

    function show_about(){
        $this->load->view('about_me'); 
    }

}

<?php

class Open_homepage extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function show_homepage(){
        $this->load->view('homepage'); 
    }

}

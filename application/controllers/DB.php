<?php

class DB extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('DB_model', 'data');
    }


    function index(){
        $results = $this->data->get_data();
    }
}
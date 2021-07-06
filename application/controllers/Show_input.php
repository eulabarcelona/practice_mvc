<?php

class Show_input extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('Sample_model', 'sample');
    }

    function show(){

        $result = $this->input->get_post('name');

            echo "<pre>";
            print_r($result);
            echo "</pre>";
            die(); 


            
             


    }


    function checkString() {

        $result = $this->input->get_post('name');

        
        header('Content-Type: Application/json');

        //check if 3 vowels are consecutive
        if (!preg_match("/[aeiou]{3,}/i", $result, $match)) {

            //check if 4 consonants are consecutive
            if (!preg_match("/[bcdfghjklmnpqrstvwxyz]{3,}/i", $result, $match)) {

                echo json_encode(array("result" => "valid", "description" => "Name valid"));

                exit();
            }
        }

        //display invalid if vowels are more than 3 and consonants are more than 4
        echo json_encode(array("result" => "invalid", "description" => "Please enter a valid name"));;
        exit();
    }
}

<?php

class Sample extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sample_model', 'sample');
    }

    function view_page(){
       
        // $result = $this->sample->sample_function();
        // $data['person']=$result;
        $this->load->view('sample_page'); 

    }

    

    
}

?>
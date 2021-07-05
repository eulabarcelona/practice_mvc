<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sample_model extends CI_model {

	public function __construct() {
		parent::__construct();
    }
	
	function sample_function(){
		$query = array(
			array(
				"name" => "ivan",
				"age" => "23"
			),
			array(
				"name" => "eula",
				"age" => "21"
			),
			array(
				"name" => "fortez",
				"age" => "3"
			),
			array(
				"name" => "eunita",
				"age" => "20"
			),
			array(
				"name" => "euri",
				"age" => "17"
			)
		);

		// echo"<pre>";
        // print_r($query);
		// echo"</pre>";
		
		return $query;
	}
}

	
?>
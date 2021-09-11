<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function sample()
	{
		$data['_title']		= "Sample";
		$this->load->theme('products/sample',$data);	
	}
}

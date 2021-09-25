<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function sample()
	{
		$data['_title']		= "Sample";
		$this->load->theme('products/sample',$data);	
	}

	public function cold()
	{
		$data['_title']		= "Cold storage Spares, Sales & Service";
		$this->load->theme('products/cold',$data);		
	}

	public function pharma()
	{
		$data['_title']		= "Pharmaceutics Machinery & Spares";
		$this->load->theme('products/pharma',$data);		
	}
}

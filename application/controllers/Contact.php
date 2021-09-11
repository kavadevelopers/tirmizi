<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['_title']		= "Contact";
		$this->load->theme('contact',$data);	
	}
}

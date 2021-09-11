<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['_title']		= "Home";
		$this->load->theme('home',$data);	
	}
}

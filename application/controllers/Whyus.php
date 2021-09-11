<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whyus extends CI_Controller {

	public function index()
	{
		$data['_title']		= "Why us";
		$this->load->theme('whyus',$data);	
	}
}

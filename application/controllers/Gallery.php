<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$data['_title']		= "Gallery";
		$this->load->theme('gallery',$data);	
	}
}

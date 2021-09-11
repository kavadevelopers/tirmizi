<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Error404 extends CI_Controller 
{
 	public function __construct() 
 	{
    	parent::__construct(); 
 	} 

 	public function index() 
 	{ 
 		$data['_title']		= "404 - Page not found";
    	$this->output->set_status_header('404'); 
    	$this->load->theme('error404',$data);
 	} 
} 
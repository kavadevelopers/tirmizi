<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function menu($seg,$iarray,$def = false)
{
	$CI =& get_instance();
	$current = $CI->uri->segment($seg);
	if ($def && $current == "") {
		return "active";	
	}else if($current == $iarray){
		return "active";	
	}else{
		return "";	
	}
}
?>
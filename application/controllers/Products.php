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

	public function plastic()
	{
		$data['_title']		= "Plastic Metal Testing Machinery";
		$this->load->theme('products/plastic',$data);		
	}

	public function pipe()
	{
		$data['_title']		= "Pipe Fitting & Valves";
		$this->load->theme('products/pipe',$data);		
	}

	public function air_cond()
	{
		$data['_title']		= "Air Conditioning Plants";
		$this->load->theme('products/air_cond',$data);			
	}

	public function fabrication()
	{
		$data['_title']		= "Fabrication Products";
		$this->load->theme('products/fabrication',$data);			
	}

	public function furnitures()
	{
		$data['_title']		= "Furnitures";
		$this->load->theme('products/furnitures',$data);			
	}

	public function clothing()
	{
		$data['_title']		= "Clothing";
		$this->load->theme('products/clothing',$data);			
	}

	public function garment()
	{
		$data['_title']		= "Garments & Hosiery Products";
		$this->load->theme('products/garment',$data);			
	}

	public function cutlery()
	{
		$data['_title']		= "Cutlery & Ornaments";
		$this->load->theme('products/cutlery',$data);			
	}

	public function groceries()
	{
		$data['_title']		= "Groceries";
		$this->load->theme('products/groceries',$data);			
	}

	public function fruits()
	{
		$data['_title']		= "Fruits & Vegetables";
		$this->load->theme('products/fruits',$data);			
	}

	public function dairy()
	{
		$data['_title']		= "Dairy Products";
		$this->load->theme('products/dairy',$data);			
	}
}

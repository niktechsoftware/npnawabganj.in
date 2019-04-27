<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index() {
			 $this->load->view("header");
  			$this->load->view("menu"); 
 			$this->load->view('about');
 			 // $this->load->view("slider");
			$this->load->view('footer');
	}

	public function Executive() {
		 $this->load->view("header");
  			$this->load->view("menu");
  			 $this->load->view("slider");
 			$this->load->view('officer_massage');
			$this->load->view('footer');
		

	}

public function Chairman() {
	 $this->load->view("header");
	 $this->load->view("menu"); 
	  $this->load->view("slider");
 		$this->load->view('chairman_massage');
		 $this->load->view('footer');
		
	}
	public function functions() {
		 $this->load->view("header");
		 $this->load->view("menu");
		  $this->load->view("slider");
 		$this->load->view('functions');
		$this->load->view('footer');
		
}
public function Staff_detail() {
		$this->load->view('header');
		$this->load->view("menu");
		 // $this->load->view("slider");
		$this->load->view('staff_detail');
		 $this->load->view('footer');
		
}
public function population() {
		$this->load->view('header');
		$this->load->view("menu");
		 // $this->load->view("slider");
		$this->load->view('population');
		 $this->load->view('footer');
}
public function Holy_place() {
		$this->load->view('header');
		$this->load->view("menu");
		 // $this->load->view("slider");
		$this->load->view('holy_place');
		 $this->load->view('footer');
}
public function gallery() {
        $this->load->view('header');
        $this->load->view("menu");
         // $this->load->view("slider");
        $this->load->view('gallery');
         $this->load->view('footer');
}
}

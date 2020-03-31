<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index(){
		$data = array(
			'title' => 'SchoolName: Homepage'
		);
		$this->load->view('templates/head',$data);
		$this->load->view('homepage',$data);
		$this->load->view('templates/tail',$data);
	}
}

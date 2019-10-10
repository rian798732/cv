<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("home_model");
	}
	public function index()
	{
		$data["biografi"] = $this->home_model->getAll();
		var_dump($data);
		$this->load->view('home', $data);
		// $this->load->view('home');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("home_model");
		$this->load->model("admin/pengalaman_model");
	}
	public function index()
	{
		$data["biografi"] = $this->home_model->getAll();
		$data["pengalaman"] = $this->pengalaman_model->getPengalaman();
		var_dump($data["pengalaman"]);
		$this->load->view('home', $data);
		// $this->load->view('home');
	}
}

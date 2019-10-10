<?php

class Pengalaman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->model("admin/Pengalaman_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
        $data["pengalaman"] = $this->Pengalaman_model->getPengalaman();
        var_dump($data);
		$this->load->view('admin/pengalaman', $data);
	}

	public function simpan()
    {
        $data = $this->Pengalaman_model;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

		// var_dump($validation->run());  Untuk ngetest
        if ($validation->run()) {
            $data->simpan();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil ditambahkan');
            redirect(site_url('admin/pengalaman'));
        }

        $this->load->view("admin/pengalaman", $data);
    }
}
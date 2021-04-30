<?php

class Oop extends CI_Controller
{
	public function _construct()
	{
		parent::_construct();
		$this->load->model('indeks_model');
	}

	public function index()
	{
		$data = array(
			'konten' => $this->indeks_model->get_data()
		);
		$this->load->view('cetak_model', $data);
	}
}
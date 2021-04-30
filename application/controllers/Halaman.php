<?php

class Halaman extends CI_Controller
{
	function view()
	{
		$data['judul'] = 'judul halaman';
		$data['konten'] = 'halaman ini dipanggil dari controller halaman';
		$this->load->view('hal_view', $data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rule extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    if ($this->session->userdata('login') != true)
	    {
	      $url=base_url().'login';
	      redirect($url);
	    }
	    $this->load->library('session');
	    $this->load->model('hama_penyakit_m');
	    $this->load->model('user_m');
	}

	public function index()
	{
		$data['title'] = 'Data Rule';
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

		$hama_penyakit = $this->hama_penyakit_m->get();
		if ($hama_penyakit->num_rows() > 0) {
			$hama_penyakit = $hama_penyakit->result_array();
			$data['hama_penyakit'] = $hama_penyakit;
		} else {
			$data['hama_penyakit'] = NULL;
		}

		$this->load->view('templates/header', $data);
	    $this->load->view('templates/sidebar', $data);
	    $this->load->view('templates/topbar', $data);
	    $this->load->view('rule/index', $data);
	    $this->load->view('templates/footer');
	}
}

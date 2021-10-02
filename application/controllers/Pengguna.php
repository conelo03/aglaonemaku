<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

	public function index()
	{
		$data['pengguna']	= $this->db->select('*, pengguna.nama as nama')
			->from('hasil')
			->join('pengguna', 'pengguna.id_identifikasi=hasil.id_identifikasi')
			->join('hama_penyakit', 'hama_penyakit.kode_hp=hasil.kode_hp')
			->get()->result();

		$data['title'] 		= 'Data Pengguna';
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pengguna', $data);
		$this->load->view('templates/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    if ($this->session->userdata('login') != true)
	    {
	      $url=base_url().'login';
	      redirect($url);
	    }
	    $this->load->library('session');
	    $this->load->model('gejala_m');
	    $this->load->model('user_m');
	}

	public function index()
	{
		$data['title'] = 'Data Gejala';
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

		$gejala = $this->gejala_m->get();
		if ($gejala->num_rows() > 0) {
			$gejala = $gejala->result_array();
			$data['gejala'] = $gejala;
		} else {
			$data['gejala'] = NULL;
		}

		$this->load->view('templates/header', $data);
	    $this->load->view('templates/sidebar', $data);
	    $this->load->view('templates/topbar', $data);
	    $this->load->view('gejala/index', $data);
	    $this->load->view('templates/footer');

	}

	public function hapus_gejala($id){
		$this->gejala_m->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('Gejala'));
	}

	public function aksi_edit_gejala($id){
		$kode_gejala = $_POST['kode_gejala'];
		$nama_gejala = $_POST['nama_gejala'];
		$desc_gejala = $_POST['desc_gejala'];
		$this->gejala_m->update($kode_gejala, $nama_gejala, $desc_gejala, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
		redirect(base_url('Gejala'));
	}

	public function aksi_tambah_gejala(){
		$kode_gejala = $_POST['kode_gejala'];
		$nama_gejala = $_POST['nama_gejala'];
		$desc_gejala = $_POST['desc_gejala'];
		$this->gejala_m->insert($kode_gejala, $nama_gejala, $desc_gejala);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		redirect(base_url('Gejala'));
	}
}

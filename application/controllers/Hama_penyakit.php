<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hama_penyakit extends CI_Controller {

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
	    $this->load->model('gejala_m');
	    $this->load->model('user_m');
	}

	public function index()
	{
		
		$data['title'] = 'Data Hama Penyakit';
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
	    $this->load->view('hama_penyakit/index', $data);
	    $this->load->view('templates/footer');
	}

	public function hapus_hama_penyakit($id){
		$this->hama_penyakit_m->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('Hama_penyakit'));
	}

	public function aksi_edit_hama_penyakit($id){
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$deskripsi = $_POST['deskripsi'];
		$solusi = $_POST['solusi'];
		$this->hama_penyakit_m->update($kode,$nama,$deskripsi,$solusi,$id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
		redirect(base_url('Hama_penyakit'));
	}

	public function aksi_tambah_hama_penyakit(){
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$deskripsi = $_POST['deskripsi'];
		$solusi = $_POST['solusi'];
		$this->hama_penyakit_m->insert($kode,$nama, $deskripsi, $solusi);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		redirect(base_url('Hama_penyakit'));
	}
}

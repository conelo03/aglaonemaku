<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi extends CI_Controller {

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
	    $this->load->model('relasi_m');
	}
	public function index()
	{
		$data['title']	= 'Data Relasi';
		$data['user'] 	= $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		$m 	= $this->db->get('hama_penyakit')->result();
		$data['relasi']	= [];
		foreach ($m as $key) {
			$n 	= $this->db->get_where('relasi', [
				'kode_hp'	=> $key->kode_hp
			])->result();
			// print_r(count($n));
			if (count($n) !== 0) {
				$data['relasi'][$key->nama_hp]					= [];
				$data['relasi'][$key->nama_hp]['kode_hp']	= $key->kode_hp;
				$data['relasi'][$key->nama_hp]['id_relasi']	= $n[0]->id_relasi;
				$data['relasi'][$key->nama_hp]['gejala']		= [];
				for ($i=0; $i < count($n); $i++) {
					$b 	= $this->db->get_where('gejala', [
						'kode_gejala'	=> $n[$i]->kode_gejala
					])->row();
					$data['relasi'][$key->nama_hp]['gejala'][$i]	= $b->nama_gejala;
				}
			}
			
		}
		// die();
		$data['gejala'] = $this->gejala_m->get()->result_array();

		$hama_penyakit = $this->hama_penyakit_m->get_unrelated();
		if ($hama_penyakit->num_rows() > 0) {
			$hama_penyakit = $hama_penyakit->result_array();
			$data['hama_penyakit'] = $hama_penyakit;
		} else {
			$data['hama_penyakit'] = NULL;
		}
		$this->load->view('templates/header', $data);
	    $this->load->view('templates/sidebar', $data);
	    $this->load->view('templates/topbar', $data);
	    $this->load->view('relasi/index', $data);
	    $this->load->view('templates/footer');
	}

	public function aksi_edit_relasi($id)
	{
		// print_r($id);die();
		$kode_hp = $id;
		if (isset($_POST['gejala'])) {
			$gejala = $_POST['gejala'];
			$kode_gejala = implode(',',$gejala);
			$this->db->where('kode_hp', $kode_hp);
			$this->db->delete('relasi');
			for ($i=0; $i < count($gejala); $i++) { 
				// $this->relasi_m->update($id_hama_penyakit, $gejala[$i]);
				$this->db->insert('relasi', [
					'kode_gejala'		=> $gejala[$i],
					'kode_hp'	=> $kode_hp
				]);
			}
			// $this->relasi_m->update($id_hama_penyakit, $id_gejala);
			// print_r($id_hama_penyakit);
			// print_r($id_gejala);die();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
			redirect(base_url('relasi'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Error!</div>');
			redirect(base_url('relasi'));
		} 
	}

	public function aksi_tambah_relasi(){
		// print_r($this->input->post());die();
		$kode_hp = $_POST['kode_hp'];
		if (isset($_POST['gejala'])) {
			$gejala = $this->input->post('gejala');
			foreach ($gejala as $key) {
				$this->db->insert('relasi', [
					'kode_gejala'		=> $key,
					'kode_hp'	=> $kode_hp
				]);
			}

			// $gejala = $_POST['gejala'];
			// $id_gejala = implode(',',$gejala);
			// $this->relasi_m->insert($id_hama_penyakit,$id_gejala);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Error!</div>');

			redirect(base_url('relasi'));
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');

		redirect(base_url('relasi'));
	}

	public function hapus_relasi($id){
		$this->relasi_m->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('relasi'));
	}
}

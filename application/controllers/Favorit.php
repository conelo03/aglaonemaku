<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorit extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    if ($this->session->userdata('login') != true)
	    {
	      $url=base_url().'login';
	      redirect($url);
	    }
	    $this->load->library('session');
	    $this->load->model('favorit_m');
	    $this->load->model('gejala_m');
	    $this->load->model('user_m');
	}

	public function index()
	{
		
		$data['title'] = 'Data Favorit';
		$data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

		$favorit = $this->favorit_m->get();
		if ($favorit->num_rows() > 0) {
			$favorit = $favorit->result_array();
			$data['favorit'] = $favorit;
		} else {
			$data['favorit'] = NULL;
		}

		$this->load->view('templates/header', $data);
	    $this->load->view('templates/sidebar', $data);
	    $this->load->view('templates/topbar', $data);
	    $this->load->view('favorit/index', $data);
	    $this->load->view('templates/footer');
	}

	public function hapus_favorit($id){
		$this->favorit_m->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
		redirect(base_url('favorit'));
	}

	public function aksi_edit_favorit($id){
		$gambar_agl = $_POST['gambar_agl_lama'];
		if(!empty($_FILES['gambar_agl']['name'])){
            $gambar_agl = $this->upload();
            
        }
		$nama_agl = $_POST['nama_agl'];
		$desc_agl = $_POST['desc_agl'];
		$this->favorit_m->update($nama_agl, $desc_agl, $gambar_agl,$id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
		redirect(base_url('favorit'));
	}

	public function aksi_tambah_favorit(){
		$gambar_agl = $this->upload();
		$nama_agl = $_POST['nama_agl'];
		$desc_agl = $_POST['desc_agl'];
		$this->favorit_m->insert($nama_agl, $desc_agl, $gambar_agl);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');
		redirect(base_url('favorit'));
	}

	private function upload()
    {
        $this->load->library('upload');
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpg|png|jpeg|PNG';
        $config['max_size'] = 10100;
        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('gambar_agl'))
        {
            return '';
        }

        return $this->upload->data('file_name');
    }
}

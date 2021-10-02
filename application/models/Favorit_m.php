<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorit_m extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $tabel = 'aglaonema';
	public function get()
	{
		return $this->db->order_by('id_agl', 'ASC')->get($this->tabel);
	}
	
	public function get_unrelated()
	{
		return $this->db->query("SELECT p.kode_hp, p.nama_hp, r.kode_gejala FROM $this->tabel p LEFT JOIN relasi r ON p.kode_hp = r.kode_hp WHERE r.kode_hp is null;");
	}

	public function get_where($where){
		$this->db->where($where);
		return $this->db->get_where($this->tabel);
	}

	public function insert($nama,$deskripsi,$gambar){
		$this->db->query("INSERT INTO $this->tabel(nama_agl, desc_agl,gambar_agl) VALUES ('$nama','$deskripsi','$gambar')");
	}

	public function update($nama,$deskripsi,$gambar,$id){
		$this->db->query("UPDATE $this->tabel SET nama_agl = '$nama', desc_agl = '$deskripsi', gambar_agl = '$gambar' WHERE id_agl = '$id'");
	}

	public function delete($id){
		$this->db->query("DELETE FROM $this->tabel WHERE id_agl = '$id'");
	}
	
}

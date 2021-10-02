<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hama_penyakit_m extends CI_Model {

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
	public $tabel = 'hama_penyakit';
	public function get()
	{
		return $this->db->order_by('kode_hp', 'ASC')->get($this->tabel);
	}
	
	public function get_unrelated()
	{
		return $this->db->query("SELECT p.kode_hp, p.nama_hp, r.kode_gejala FROM $this->tabel p LEFT JOIN relasi r ON p.kode_hp = r.kode_hp WHERE r.kode_hp is null;");
	}

	public function get_where($where){
		$this->db->where($where);
		return $this->db->get_where($this->tabel);
	}

	public function insert($kode,$nama,$deskripsi,$solusi){
		$this->db->query("INSERT INTO $this->tabel(kode_hp, nama_hp, desc_hp,solusi_hp) VALUES ('$kode','$nama','$deskripsi','$solusi')");
	}

	public function update($kode,$nama,$deskripsi,$solusi,$id){
		$this->db->query("UPDATE $this->tabel SET kode_hp = '$kode', nama_hp = '$nama', desc_hp = '$deskripsi', solusi_hp = '$solusi' WHERE kode_hp = '$id'");
	}

	public function get_where_relasi($id_relasi)
	{
		return $this->db->query("SELECT r.id_relasi, r.id_gejala, r.kode_hp, p.nama, p.deskripsi, p.solusi FROM relasi r JOIN hama_penyakit p ON r.kode_hp = p.kode_hp WHERE id_relasi = '$id_relasi'");
	}

	public function delete($id){
		$this->db->query("DELETE FROM $this->tabel WHERE kode_hp = '$id'");
	}
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala_m extends CI_Model {

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
	public $tabel = 'gejala';

	public function get()
	{
		// return $this->db->query("SELECT * FROM gejala order by LENGTH(kode_gejala), kode_gejala");
		return $this->db->select('*, CAST(kode_gejala as SIGNED) AS casted_column')->order_by('length(kode_gejala)')->order_by('kode_gejala')->get($this->tabel);
	}
	
	public function get_array($array){
		$this->db->query("SELECT * FROM $this->tabel WHERE kode_gejala in ('$array')");
	}

	public function get_where($where){
		$this->db->where($where);
		return $this->db->get_where($this->tabel);
	}

	public function insert($kode_gejala,$nama_gejala,$desc_gejala){
		$this->db->query("INSERT INTO $this->tabel(kode_gejala, nama_gejala, desc_gejala) VALUES ('$kode_gejala','$nama_gejala','$desc_gejala')");
	}

	public function update($kode_gejala,$nama_gejala,$desc_gejala,$id){
		$this->db->query("UPDATE $this->tabel SET kode_gejala = '$kode_gejala', nama_gejala = '$nama_gejala', desc_gejala = '$desc_gejala' WHERE kode_gejala = '$id'");
	}

	public function delete($id){
		$this->db->query("DELETE FROM $this->tabel WHERE kode_gejala = '$id'");
	}
}

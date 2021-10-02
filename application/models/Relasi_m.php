<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi_m extends CI_Model {

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
	public $tabel = 'relasi';

	public function get_where($kode_gejala)
	{
		return $this->db->query("SELECT r.id_relasi, r.kode_gejala, r.kode_hp, p.nama_hp, p.desc_hp, p.solusi_hp FROM relasi r JOIN hama_penyakit p ON r.kode_hp = p.kode_hp WHERE kode_gejala = '$kode_gejala'");
	}

	public function get_memasuki_gejala($kode_gejala)
	{
		return $this->db->query("SELECT r.id_relasi, r.kode_gejala, r.kode_hp, p.nama_hp, p.desc_hp, p.solusi_hp FROM relasi r JOIN hama_penyakit p ON r.kode_hp = p.kode_hp WHERE kode_gejala like '%$kode_gejala%'");
	}

	public function insert($kode_hp,$kode_gejala){
		$this->db->query("INSERT INTO $this->tabel(kode_hp,kode_gejala) VALUES ('$kode_hp','$kode_gejala')");
	}

	public function get()
	{
		return $this->db->query("SELECT r.id_relasi, r.kode_gejala, r.kode_hp, g.nama_gejala as nama_gejala, p.nama_hp as nama_hama_penyakit, p.desc_hp, p.solusi_hp FROM relasi r JOIN hama_penyakit p join gejala g ON r.kode_hp = p.kode_hp and r.kode_gejala = g.kode_gejala");
	}

	public function delete($id){
		// $this->db->query("DELETE FROM $this->tabel WHERE id_relasi = '$id'");
		$this->db->where('kode_hp', $id);
		$this->db->delete('relasi');
	}

	public function update($kode_hp, $kode_gejala){
		$this->db->query("UPDATE $this->tabel SET kode_gejala = '$kode_gejala' WHERE kode_hp = '$kode_hp'");
		// $this->db->insert('relasi',)
	}
}

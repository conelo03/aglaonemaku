<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

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
    public $tabel = 'admin';

	public function insert($nama, $username, $password)
	{
		$this->db->query("INSERT INTO $this->tabel(nama, username, password) VALUES ('$nama','$username','$password')");
    }
    
    public function get_where($where)
    {
        $this->db->where($where);
        return $this->db->get($this->tabel);
    }
}

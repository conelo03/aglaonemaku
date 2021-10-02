<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function index()
	{
		$data['title'] = 'Beranda';
		$this->load->view('depan/beranda', $data);
	}

    public function informasi()
	{
		$data['title'] = 'Informasi';
		$this->load->view('depan/informasi');
	}


	public function favorit()
	{
        $ip=file_get_contents('https://api.ipify.org');
        $get_ip = $this->db->get_where('pengunjung', ['ip' => $ip])->row_array();
        $star = '';
        if(empty($get_ip)){
            $star = $get_ip['id_agl'];
        }else{
            $star = $get_ip['id_agl'];
        }
		$data['title'] = 'Favorit';
        $data['star'] = $star;
        $data['aglaonema'] = $this->db->get('aglaonema')->result_array();
		$this->load->view('depan/favorit', $data);
	}

    public function favoritku($mode, $id_agl)
    {
        $ip=file_get_contents('https://api.ipify.org');

        $cek_ip = $this->db->get_where('pengunjung', ['ip' => $ip]);
        $get_ip = $cek_ip->row_array();

        if($mode == 'fav'){
            if($cek_ip->num_rows() > 0){
                $data_ip = [
                    'id_agl' => $id_agl,
                ];
                $this->db->where('ip', $ip);
                $this->db->update('pengunjung', $data_ip);
            }else{
                 $data_ip = [
                    'id_agl' => $id_agl,
                    'ip' => $ip,
                ];
                $this->db->insert('pengunjung', $data_ip);
            }
        } else {
            $this->db->where('ip', $ip);
            $this->db->delete('pengunjung');
        }
            
        $aglaonema = $this->db->get('aglaonema')->result_array();
        foreach ($aglaonema as $key) {
            $fav = $this->db->get_where('pengunjung', ['id_agl' => $key['id_agl']])->num_rows();

            $this->db->where('id_agl', $key['id_agl']);
            $this->db->update('aglaonema', ['jumlah_fav' => $fav]);
        }

        redirect('User/favorit');
    }

	public function identifikasi()
	{
		$this->db->query("DELETE from rule_temp");
        $this->session->unset_userdata('id_identifikasi');
		$data['title'] = 'Identifikasi';
		$this->load->view('depan/identifikasi', $data);
	}

	public function simpan_pengguna(){

        $id_identifikasi = uniqid('identifikasi');
        $data['title'] = 'Cek Identifikasi';
   
        $this->db->insert('pengguna', [
            'id_identifikasi'    => $id_identifikasi,
            'nama'          => $this->input->post('nama'),
            'usia'       => $this->input->post('usia'),
            'alamat'        => $this->input->post('alamat'),
        ]); 

        $this->session->set_userdata('id_identifikasi', $id_identifikasi);  
		redirect('User/cek_identifikasi');
	}

	public function cek_identifikasi($kesimpulan = null, $id= null, $index = 0){
        $data['title'] = 'Cek Identifikasi';

        if(is_null($kesimpulan) && is_null($id)){
            $data['gejala'] = $this->db->get('gejala')->result_array();
            $data['index'] = 0;
        } else {
            $cek = $this->db->get_where('rule_temp', ['pilihan' => $id])->num_rows();
            if($cek == 0){
                $this->db->insert('rule_temp', [
                    'id_identifikasi'    => $this->session->userdata('id_identifikasi'),
                    'pilihan'          => $id,
                    'kesimpulan'       => $kesimpulan
                ]); 
            }
            $data['index'] = $index;
            $data['gejala'] = $this->db->get('gejala')->result_array();
            if(empty($data['gejala'][$index])){
                redirect('User/hasil_identifikasi');
            } 
        }

        $this->load->view('depan/pertanyaan', $data);
    }

    public function hasil_identifikasi(){
        $data['title'] = 'Hasil Identifikasi';
        $data['pertanyaan'] = $this->db->get('rule_temp')->result_array(); 

        if(empty($data['pertanyaan'])){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert" >Belum ada diagnosa! Silahkan input data baru.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('User/identifikasi');
        }

        $id_identifikasi = $this->session->userdata('id_identifikasi');
        $rule = $this->db->get_where('rule_temp',[ 'id_identifikasi' => $id_identifikasi, 'kesimpulan' => 'y'])->result_array();


        $gej = array();
        foreach ($rule as $key) {
            $gej[] = $key['pilihan'];
        }

        $gejala = $gej;

        $no  = 0;
        $i = 1;
        $n = [];
        // print_r($gejala);echo "</br>";
        for ($l=0; $l < count($gejala); $l++) { 
            $m = $this->db->get_where('gejala', [
                'kode_gejala' => $gejala[$l]
            ])->row();
            $n[$l] = $m->nama_gejala;
        }
        $data['hama_penyakit'] = 0;
        for ($k = 0; $k < count($gejala); $k++) {
            $this->db->select('relasi.kode_hp, nama_hp'); 
            $this->db->from('relasi');
            $this->db->join('hama_penyakit', 'relasi.kode_hp = hama_penyakit.kode_hp');
            $this->db->where('kode_gejala', $gejala[0]);
            for ($a = 1; $a < count($gejala); $a++) {
                $this->db->or_where('kode_gejala', $gejala[$a]);    
            }
            $b = $this->db->get()->result();

            $v = [];
            $no = 0;
            for ($c=0; $c < count($b); $c++) {
                if ($c == 0) {
                  $x = 1;
                } else {
                  if ($b[$c]->kode_hp == $b[$c - 1]->kode_hp) {
                    $x = 0;
                  } else {
                    $x = 1;
                  }
                }
                if ($x == 1) {
                  $v[$no] = $b[$c];
                  $no++;
                }
            }
            // print_r($v);echo "</br>";
            
            if (count($v) == 1) {
                $kode_hp = $b[0]->kode_hp;
                //var_dump($kode_hp);
                
                $get_tot_gejala = $this->db->get_where('relasi', ['kode_hp' => $kode_hp])->num_rows();
                //$peluang = count($gejala)/$get_tot_gejala * 100;
                $peluang = count($gejala);
                $data['hama_penyakit'] = $v;
                $data['peluang'] = $peluang;
            } else {
               if ($k == count($gejala) - 1) {
                    $peluang= array();
                    for ($z = 0; $z < count($v); $z++) {
                        $this->db->select('kode_gejala');
                        $this->db->from('relasi');
                        $this->db->where('kode_hp', $v[$z]->kode_hp);
                        $d = $this->db->get()->result_array();
                        $data1 = array();
                        for ($s = 0; $s < count($d); $s++) {
                            $data1[] = $d[$s]['kode_gejala'];
                        }
                        $data3 = [];
                        $q     = 0;
                        for ($l = 0; $l < count($gejala); $l++) {
                            $data2  = in_array($gejala[$l], $data1);
                            if ($data2) {
                                $data3[$q] = $gejala[$l];
                                $q++;
                            }
                        }
                        //$peluang[$z] = count($data3) / count($data1) * 100;
                        $peluang[$z] = count($data3);
                
                    }
                    $data['hama_penyakit']   = $v;
                    $data['peluang']    = $peluang;
                    $data['tertinggi']  = max($peluang);
                } else {
                    $i++;    
                } 
            }
        }

        $hama_penyakit_terpilih = array();
        $peluang_terpilih = array();

        for ($i=0; $i < count($data['hama_penyakit']); $i++) {
            if (is_array($data['peluang'])) {
                 $peluang = $data['peluang'][$i];
                 
             } else {
                 $peluang = $data['peluang'];
             }
             $peluang_terpilih[] = $peluang;
            $hama_penyakit_terpilih[] = $data['hama_penyakit'][$i]->kode_hp; 
        }     

        $max_peluang = max($peluang_terpilih);
        $index = array_search($max_peluang, $peluang_terpilih);
        $id_identifikasi = $this->session->userdata('id_identifikasi');
        $kode_hp = $hama_penyakit_terpilih[$index];
        $cek_id = $this->db->get_where('hasil', ['id_identifikasi' => $id_identifikasi])->num_rows();
        if($cek_id == 0){
            $this->db->insert('hasil', [
                'id_identifikasi'    => $id_identifikasi,
                'kode_hp' => $kode_hp,
            ]); 
        }
        $data['hama_penyakit'] = $this->db->get_where('hama_penyakit', ['kode_hp' => $kode_hp])->row_array(); 
        $data['pengguna'] = $this->db->get_where('pengguna', ['id_identifikasi' => $id_identifikasi])->row_array(); 

        $this->load->view('depan/hasil_identifikasi', $data);
    }

}

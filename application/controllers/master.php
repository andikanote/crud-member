<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

	public function login()
	{
		 
		$this->load->view('login');
	}

	public function index()
	{
		$data['isi'] = 'home';
		$data['class'] = 'home';
		$this->load->view('index',$data);
	}

	public function tabel()
	{
		$data['isi'] = 'tabel';
		$data['class'] = 'tabel';
		$data['data'] = $this->db->query("SELECT * FROM tbl_anggota ");
		$this->load->view('index',$data);
	}

	public function proses_input(){
       
	 

		$data = array('nik' => $this->input->post('nik') ,
			          'no_kk' => $this->input->post('no_kk'),
			          'nama_lengkap' => $this->input->post('nama_lengkap'),
			          'ttl' => $this->input->post('ttl'),
			          'alamat' => $this->input->post('alamat'),
			          'rt/rw' => $this->input->post('rt/rw'),
			          'kecamatan' => $this->input->post('kecamatan'),
			          'jumlah_anak' => $this->input->post('jumlah_anak'),
			          'email' => $this->input->post('email'),
			          'status' => $this->input->post('status'),
			          'no_hp' => $this->input->post('no_hp'),
			          'media_sosial' => $this->input->post('media_sosial'),
			          'pendidikan_formal' => $this->input->post('pendidikan_formal'),
			          'pendidikan_nonformal' => $this->input->post('pendidikan_nonformal'),
			          'pekerjaan' => $this->input->post('pekerjaan'),
			          'pengalaman_kerja' => $this->input->post('pengalaman_kerja'),
			          'pengalaman_organisasi' => $this->input->post('pengalaman_organisasi'),
			          'bidang_usaha' => $this->input->post('bidang_usaha'),
			          'afiliasi_politik' => $this->input->post('afiliasi_politik'),
			          'keanggotaan' => $this->input->post('keanggotaan'),
			          'jenjang_kaderisasi' => $this->input->post('jenjang_kaderisasi'),
			          'jabatan_struktural' => $this->input->post('jabatan_struktural'),


		 );
		$this->db->insert('tbl_anggota',$data);
		redirect('master/tabel');
	}

	public function form()
	{
		$data['isi'] = 'form';
		$data['class'] = 'form';
		$this->load->view('index',$data);
	}

	public function detail($id_anggota)
	{
		$data['isi'] = 'detail';
		$data['class'] = 'form';
		$data['data'] = $this->db->query("SELECT * FROM tbl_anggota where id_anggota=$id_anggota ");
		$this->load->view('index',$data);
	}

	public function proses_edit(){
		$id_input =  $this->input->post('id_input');
		$nama =  $this->input->post('nama');
		$email =  $this->input->post('email');
		$no =  $this->input->post('no');

		$data = array('nama' => $nama ,
					  'email' => $email,
					  'no' => $no
		 );

		$this->db->where('id_input',$id_input);
		$this->db->update('input',$data);
		redirect('master/tabel');
	}

	public function hapus($id_anggota){
		$this->db->query("DELETE FROM tbl_anggota where id_anggota='$id_anggota'");
		redirect('master/tabel');
	}


	function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 
		$cek = $this->db->query("SELECT * FROM tbl_admin where username='$username' and password='$password'")->num_rows();
		if($cek > 0){
 		
			$this->session->set_userdata('username',$username);
			redirect(base_url("master"));
 
		}else{
			echo "Username dan password salah !";
		}
	 
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('master/login'));
	}

	 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
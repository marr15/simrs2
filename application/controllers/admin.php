<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
			parent::__construct();
			$this->load->model('m_data');
			$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	function aksi_login()
	{
		
		$username	= $_POST['username'];
		$password 	= $_POST['password'];

		$where = array(
				'username'	=> $username,
				'password' 	=> $password);

		$cek = $this->m_data->cek_login("user",$where);
		if($cek->num_rows() > 0){
			foreach ($cek->result() as $row)
			{
			$data_session = array(
				'username' 		=> $username,
				'password' 		=> $password,
				'hak_akses' 	=> $row->hak_akses,
				'id'			=> $row->id,
				
			);

			$this->session->set_userdata($data_session);

			$qad = $cek->row();
			if($username == $qad->username && $password == $qad->password){
				if($qad->hak_akses == 'super_admin')
					redirect('admin/masuk_admin');
				elseif ($qad->hak_akses == 'frontof') 
					redirect('admin/front');
				elseif ($qad->hak_akses == 'backof')
					redirect('admin/back');
					
				}	
			}
		}
		else
		{
			$this->session->set_flashdata('error_msg', ' Login gagal ! Username dan Password salah !.');
			redirect('admin/index');
		}
	}


	function daftar_pasien()
	{
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('admin/daftar_pasien');
		$this->load->view('template/footer');
	}
	function daftar_pasien_front()
	{
		$this->load->view('template/front_office');
		$this->load->view('template/header');
		$this->load->view('admin/daftar_pasien');
		$this->load->view('template/footer');
	}

	function masuk_admin()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
		
	}

	function front()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/front_office');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
		
	}
	function back()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/back_office');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
		
	}
	function dokter()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/v_dokter');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
		
	}

	public function data_admin()
	{
		$this->load->model('m_data');
		$data['user'] = $this->m_data->tampil_data('user')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('admin/data_user',$data);
		$this->load->view('template/footer');
	}
	function edit_data($id)
	{
		$where = array('id' => $id);
		$this->load->model('m_data');
		$data['user'] = $this->m_data->tampil_data('user')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('admin/edit_admin',$data);
		$this->load->view('template/footer');
	}

	
	function aksi_tambah_admin()
	{
		$username 		= $this->input->post('username');
		$password		= $this->input->post('password');
		$status			= $this->input->post('status');
		date_default_timezone_set('Asia/Makassar');
		$date_created		= date("y-m-d h:i:s");

		$data = array(
				'username' 		=> $username,
				'password' 		=> $password,
				'hak_akses' 		=> $hak_akses,
				//'date_created' 	=> $date_created,
				);

		$this->m_data->input_data($data,'user');
		redirect('admin/data_admin');
	}

	function aksi_update_admin()
	{
		$id 			= $this->input->post('id');
		$username 		= $this->input->post('username');
		$password		= $this->input->post('password');
		$hak_akses			= $this->input->post('hak_akses');
		

		$data = array(
				'username' 		=> $username,
				'password' 		=> $password,
				'hak_akses' 		=> $hak_akses,
				'date_created' 	=> $date_created,
				);
		$where = array(
				'id' => $id
				);

		$this->m_data->update_data($where,'user',$data);
		redirect('admin/data_admin');
	}

	public function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'login');
		redirect('admin/data_admin');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('admin/index');
	}

	
}

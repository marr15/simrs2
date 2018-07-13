<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawaii extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('m_data');
			$this->load->helper('url');
		}

		public function d_pegawai() {
		$this->load->model('m_data');
		$data['pegawai'] = $this->m_data->tampil_data('pegawai')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('pegawai/pegawai',$data);
		$this->load->view('template/footer');
	}

	public function tambah_pegawai()
		{
		
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('pegawai/pegawai_tambah');
		$this->load->view('template/footer');
		}

		public function edit_pegawai($id)
		{
		
		$this->load->model('m_data');
		$where = array('id' => $id);
		$data['pegawai'] = $this->m_data->edit_data($where,'pegawai')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('pegawai/pegawai_edit',$data);
		$this->load->view('template/footer');
		}

		public function simpan_pegawai(){

		$nama			= $this->input->post('nama');
		$alamat				= $this->input->post('alamat');
		$norek		= $this->input->post('norek');
		$gaji 			= $this->input->post('gaji');
		$golongan				= $this->input->post('golongan');
		$agama			= $this->input->post('agama');
		$no_telpon		= $this->input->post('no_telpon');
	
		$data = array(
				'nama' 		=> $nama,	
				'alamat' 		=> $alamat,	
				'norek'	 	=> $norek,	
				'gaji'			=> $gaji,	
				'golongan'		=> $golongan,	
				'agama'			=> $agama,	
				'no_telpon'			=> $no_telpon,
				
				//'date_created'	=> $date_created,	
		);


		$this->m_data->input_data($data,'pegawai');
		redirect('pegawaii/d_pegawai');

		}

		function update_pegawai()
	{
		$id		= $this->input->post('id');
		$nama			= $this->input->post('nama');
		$alamat				= $this->input->post('alamat');
		$norek		= $this->input->post('norek');
		$gaji 			= $this->input->post('gaji');
		$golongan				= $this->input->post('golongan');
		$agama			= $this->input->post('agama');
		$no_telpon		= $this->input->post('no_telpon');

		$data = array(

				
				//'id'		=> $id,
				'nama' 		=> $nama,	
				'alamat' 		=> $alamat,	
				'norek'	 	=> $norek,	
				'gaji'			=> $gaji,	
				'golongan'		=> $golongan,	
				'agama'			=> $agama,	
				'no_telpon'		=> $no_telpon,
				
					

				//'date_created'	=> $date_created,	
		);

		$where = array('id' => $id);


		$this->m_data->update_data($where,'pegawai',$data);
		redirect('pegawaii/d_pegawai');
		

		}


	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'pegawai');
		redirect('pegawaii/d_pegawai');
	}



}
?>

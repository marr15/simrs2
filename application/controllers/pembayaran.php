<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct(){
			parent::__construct();
			$this->load->model('m_data');
			$this->load->helper('url');
		}

		public function d_pembayaran() {
		$this->load->model('m_data');
		$data['pembayaran'] = $this->m_data->tampil_data('pembayaran')->result();
		$data['pembayaran'] = $this->m_data->tampil_data('pembayaran')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('aset/pembayaran',$data);
		$this->load->view('template/footer');
	}
	public function tambah_pembayaran()
		{
		
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('aset/pembayaran_tambah');
		$this->load->view('template/footer');
		}

		public function edit_pembayaran($id)
		{
		
		$this->load->model('m_data');
		$where = array('id' => $id);
		$data['pembayaran'] = $this->m_data->edit_data($where,'pembayaran')->result();

		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('aset/pembayaran_edit',$data);
		$this->load->view('template/footer');
		}


		public function simpan_bayar(){

		$nama			= $this->input->post('nama');
		$tanggal				= $this->input->post('tanggal');
		$poli		= $this->input->post('poli');
		$cara_bayar 			= $this->input->post('cara_bayar');
		
	
		$data = array(
				'nama' 		=> $nama,	
				'tanggal' 		=> $tanggal,	
				'poli'	 	=> $poli,	
				'cara_bayar' => $cara_bayar,
				
				//'date_created'	=> $date_created,	
		);


		$this->m_data->input_data($data,'pembayaran');
		redirect('pembayaran/d_pembayaran');

		}

		function update_bayar()
	{
		$id		= $this->input->post('id');
		$nama			= $this->input->post('nama');
		$tanggal				= $this->input->post('tanggal');
		$poli		= $this->input->post('poli');
		$cara_bayar 			= $this->input->post('cara_bayar');
		
	
		$data = array(
				'nama' 		=> $nama,	
				'tanggal' 		=> $tanggal,	
				'poli'	 	=> $poli,	
				'cara_bayar' => $cara_bayar,
				
				//'date_created'	=> $date_created,	
		);
		$where = array('id' => $id);


		$this->m_data->update_data($where,'pembayaran',$data);
		redirect('pembayaran/d_pembayaran');
		

		}


	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'pembayaran');
		redirect('pembayaran/d_pembayaran');
	}



	}

		?>
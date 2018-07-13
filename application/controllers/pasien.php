<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('m_data');
			$this->load->helper('url');
		}


	public function d_pasien()
	{
		$this->load->model('m_data');
		$data['data_pasien'] = $this->m_data->tampil_data('data_pasien')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('admin/data_pasien',$data);
		$this->load->view('template/footer');
	}
	public function d_pasien_front()
	{
		$this->load->model('m_data');
		$data['data_pasien'] = $this->m_data->tampil_data('data_pasien')->result();
		$this->load->view('template/front_office');
		$this->load->view('template/header');
		$this->load->view('admin/data_pasien',$data);
		$this->load->view('template/footer');
	}
	public function d_pasien_dokter()
	{
		$this->load->model('m_data');
		$data['data_pasien'] = $this->m_data->tampil_data('data_pasien')->result();
		$this->load->view('template/header');
		$this->load->view('template/v_dokter');
		$this->load->view('admin/data_pasien',$data);
		$this->load->view('template/footer');
	}

	public function edit_pasien($id)
	{
		$where = array('id' => $id);
		$this->load->model('m_data');
		$data['data_pasien'] = $this->m_data->tampil_data()->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('admin/edit_pasien',$data);
		$this->load->view('template/footer');
	}
	public function edit_pasien_front($id)
	{
		$where = array('id' => $id);
		$this->load->model('m_data');
		$data['data_pasien'] = $this->m_data->tampil_data('data_pasien')->result();
		$this->load->view('template/front_office');
		$this->load->view('template/header');
		$this->load->view('admin/edit_pasien',$data);
		$this->load->view('template/footer');
	}

	function tambah_pasien()
	{
		//$rekmed 		= $this->input->post('rekmed');
		$nama_pasien		= $this->input->post('nama_pasien');
		$jk					= $this->input->post('jk');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tgl_lahir 			= $this->input->post('tgl_lahir');
		$usia 				= $this->input->post('usia');
		$alamat				= $this->input->post('alamat');
		$tgl			= $this->input->post('tgl');
		$status				= $this->input->post('status');
		$pekerjaan			= $this->input->post('pekerjaan');
		$no_telpon			= $this->input->post('no_telpon');
		$agama				= $this->input->post('agama');
		$suku				= $this->input->post('suku');
		$gol_pas			= $this->input->post('gol_pas');
		//$sub_gol_pasien		= $this->input->post('no_bpjs');
		$gol_askes	= $this->input->post('gol_askes');
		$no_askes	= $this->input->post('no_askes');
		$kesmas		= $this->input->post('kesmas');
		$kesda	= $this->input->post('kesda');
		$no_bpjs			= $this->input->post('no_bpjs');
		$ruangan			= $this->input->post('ruangan');
		$kelas			= $this->input->post('kelas');
		$kamar			= $this->input->post('kamar');
		$dokter			= $this->input->post('dokter');
		$diagnosa			= $this->input->post('diagnosa');
		$biaya			= $this->input->post('biaya');
		$detail		= $this->input->post('detail');
		$poli			= $this->input->post('poli');
		//date_default_timezone_set('Asia/Makassar');
		//$date_created		= date("y-m-d h:i:s");

		$data = array(
				'nama_pasien' 		=> $nama_pasien,	
				'jk' 				=> $jk,	
				'tempat_lahir'	 	=> $tempat_lahir,	
				'tgl_lahir'			=> $tgl_lahir,	
				'usia'				=> $usia,	
				'alamat'			=> $alamat,	
				'tgl'			=> $tgl,
				'status'			=> $status,	
				'pekerjaan'			=> $pekerjaan,	
				'no_telpon'			=> $no_telpon,	
				'agama'				=> $agama,	
				'suku'				=> $suku,	
				'gol_pas'			=> $gol_pas,		
				'gol_askes'			=> $gol_askes,
				'no_askes'			=> $no_askes,
				'kesmas'			=> $kesmas,	
				'kesda'				=> $kesda,	
				'no_bpjs'			=> $no_bpjs,	
				'ruangan'			=> $ruangan,
				'kelas'				=> $kelas,	
				'kamar'				=> $kamar,	
				'dokter'				=> $dokter,
				'diagnosa'				=> $diagnosa,
				'biaya'				=> $biaya,
				'detail'				=> $detail,
				'poli'				=> $poli,	

				//'date_created'	=> $date_created,	
		);


		$this->m_data->input_data($data,'data_pasien');
		redirect('pasien/d_pasien');
	}

	function update_pasien()
	{
		$id 		= $this->input->post('id');
		$nama_pasien		= $this->input->post('nama_pasien');
		$jk					= $this->input->post('jk');
		$tempat_lahir		= $this->input->post('tempat_lahir');
		$tgl_lahir 			= $this->input->post('tgl_lahir');
		$usia 				= $this->input->post('usia');
		$alamat				= $this->input->post('alamat');
		$tgl			= $this->input->post('tgl');
		$status				= $this->input->post('status');
		$pekerjaan			= $this->input->post('pekerjaan');
		$no_telpon			= $this->input->post('no_telpon');
		$agama				= $this->input->post('agama');
		$suku				= $this->input->post('suku');
		$gol_pas			= $this->input->post('gol_pas');
		
		$gol_askes	= $this->input->post('gol_askes');
		$no_askes	= $this->input->post('no_askes');
		$kesmas		= $this->input->post('kesmas');
		$kesda	= $this->input->post('kesda');
		$no_bpjs			= $this->input->post('no_bpjs');
		$ruangan			= $this->input->post('ruangan');
		$kelas			= $this->input->post('kelas');
		$kamar			= $this->input->post('kamar');
		$dokter			= $this->input->post('dokter');
		$diagnosa			= $this->input->post('diagnosa');
		$biaya			= $this->input->post('biaya');
		$detail		= $this->input->post('detail');
		$poli			= $this->input->post('poli');
		//date_default_timezone_set('Asia/Makassar');
		//$date_created		= date("y-m-d h:i:s");

		$data = array(

				'nama_pasien' 		=> $nama_pasien,	
				'jk' 				=> $jk,	
				'tempat_lahir'	 	=> $tempat_lahir,	
				'tgl_lahir'			=> $tgl_lahir,	
				'usia'				=> $usia,	
				'alamat'			=> $alamat,
				'tgl'			=> $tgl,		
				'status'			=> $status,	
				'pekerjaan'			=> $pekerjaan,	
				'no_telpon'			=> $no_telpon,	
				'agama'				=> $agama,	
				'suku'				=> $suku,	
				'gol_pas'			=> $gol_pas,	
				//'sub_gol_pasien'	=> $sub_gol_pasien,	
				'gol_askes'			=>$gol_askes,
				'no_askes'				=> $no_askes,
				'kesmas'				=> $kesmas,	
				'kesda'				=> $kesda,	
				'no_bpjs'				=> $no_bpjs,		
				'ruangan'			=> $ruangan,
				'kelas'				=> $kelas,	
				'kamar'				=> $kamar,	
				'dokter'				=> $dokter,
				'diagnosa'				=> $diagnosa,
				'biaya'				=> $biaya,
				'detail'				=> $detail,
				'poli'				=> $poli,
					

				//'date_created'	=> $date_created,	
		);

		$where = array('id' => $id);


		$this->m_data->update_data($where,'data_pasien',$data);
		redirect('pasien/d_pasien');
	}

	function detail($id)
	{

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$where = array('id' => $id);
		$this->load->model('m_data');
		$data['data_pasien'] = $this->m_data->edit_data($where,'data_pasien')->result();
		$data['dokter'] = $this->m_data->tampil_data('dokter')->result();
		$this->load->view('pasien/detail_pasien',$data);
		$this->load->view('template/footer');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'data_pasien');
		redirect('pasien/d_pasien');
	}


	function c_dokter(){
		$this->load->model('m_data');
		$data['dokter']=$this->m_data->dokter();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		//$this->load->model('m_data');
		//$this->load->view('view_select',$data);
		$this->load->view('template/footer');
		$this->load->view('pasien/detail_pasien',$data);
	}
}

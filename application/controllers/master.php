<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}

	function m_dokter()
	{
		$this->load->model('m_data');
		$data['dokter'] = $this->m_data->tampil_data('dokter')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/dokter',$data);
		$this->load->view('template/footer');
	}

	function tambah_dokter()
	{
		$this->load->model('m_data');
		$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/dokter_tambah',$data);
		$this->load->view('template/footer');
	}

	function aksi_tambah_dokter()
	{
		$nama 		= $this->input->post('nama');
		$alamat	= $this->input->post('alamat');
		$no_hp		= $this->input->post('no_hp');
		//$status		= $this->input->post('status');

		$data = array(
				'nama' 			=> $nama,
				'alamat'	 	=> $alamat,
				'no_hp'		 	=> $no_hp,
				//'status'	 	=> $status,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'dokter');
		redirect('master/m_dokter');
	}

	function edit_dokter($id)
	{
		$this->load->model('m_data');
		$where = array('id' => $id);
		$data['dokter'] = $this->m_data->edit_data($where,'dokter')->result();
		$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/dokter_edit',$data);
		$this->load->view('template/footer');
	}

	function update_dokter()
	{

		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$alamat	= $this->input->post('alamat');
		$no_hp		= $this->input->post('no_hp');
		//$status		= $this->input->post('status');

		$data = array(
				'nama' 			=> $nama,
				'alamat'	 	=> $alamat,
				'no_hp'		 	=> $no_hp,
				//'status'	 	=> $sta
				);
		$where = array('id' => $id);
		$this->load->model('m_data');
		$this->m_data->update_data($where,'dokter',$data);
		redirect('master/m_dokter');
	}

	function m_spesialis()
	{
		$this->load->model('m_data');
		$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/spesialis',$data);
		$this->load->view('template/footer');
	}


	function tambah_spesialis()
	{
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/spesialis_tambah');
		$this->load->view('template/footer');
	}

		function edit_spesialis($id)
	{
		$this->load->model('m_data');
		$where = array('id' => $id);
		$data['spesialis'] = $this->m_data->edit_data($where,'spesialis')->result();
		//$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/spesialis_edit',$data);
		$this->load->view('template/footer');}

	function aksi_tambah_spesialis()
	{
		$nama 		= $this->input->post('nama');

		$data = array(
				'nama' 			=> $nama,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'spesialis');
		redirect('master/m_spesialis');
	}
	function update_spesialis()
	{
		$nama 		= $this->input->post('nama');

		$data = array(
				'id' 			=> $id,
				'nama' 			=> $nama,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'spesialis');
		redirect('master/m_spesialis');
	}



function hapus_spe($id)
	{
		$this->load->model('m_data');
		$where = array('idr' => $id);
		$this->m_data->hapus_data($where,'spesialis');
		redirect('master/m_spesialis');
	}




	function d_poli()
	{
		$this->load->model('m_data');
		$data['poli'] = $this->m_data->tampil_data('poli')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/poli',$data);
		$this->load->view('template/footer');
	}


	function tambah_poli()
	{
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/poli_tambah');
		$this->load->view('template/footer');
	}

		function edit_poli($id)
	{
		$this->load->model('m_data');
		$where = array('id' => $id);
		$data['poli'] = $this->m_data->edit_data($where,'poli')->result();
		//$data['spesialis'] = $this->m_data->tampil_data('spesialis')->result();
		$this->load->view('template/sidebar');
		$this->load->view('template/header');
		$this->load->view('master/poli_edit',$data);
		$this->load->view('template/footer');
	}

	function simpan_poli()

	{
		$nm_poli		= $this->input->post('nm_poli');

		$data = array(
				'nm_poli' 			=> $nm_poli,
			);

		$this->load->model('m_data');
		$this->m_data->input_data($data,'poli');
		redirect('master/d_poli');
	}


	function update_poli()

	{
		$id		= $this->input->post('id');
		$nama 		= $this->input->post('nm_poli');

		$data = array(
				'nm_poli' 			=> $nm_poli,
			);
		$where = array('id' => $id);
		$this->load->model('m_data');
		$this->m_data->update_data($where,'poli',$data);
		redirect('master/d_poli');
	}


}
?>
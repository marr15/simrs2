<?php
	class M_data extends CI_Model{

		function cek_login($table,$where)
		{
			return $this->db->get_where($table,$where);
		}

		function data($number,$offset){
			return $query = $this->db->get('medik',$number,$offset)->result();
		}
		
		function tampil_data($table)
		{
			return $this->db->get($table);
		}
		function insert_user($data)
	    {
			return $this->db->insert('medik' , $data);
		}
		function input_data($data,$tabel)
		{
			$this->db->insert($tabel,$data);
		}
		function hapus_data($where,$tabel)
		{
			$this->db->where($where);
			$this->db->delete($tabel);
		}
		
		function edit_data($where,$tabel)
		{
			return $this->db->get_where($tabel,$where);
		}
		function update_data($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($data,$table);
		}
		function jumlah_data()
		{
			return $this->db->get('medik')->num_rows();
		}

		public function nisn_check($nisn)
	  	{
		  $this->db->select('*');
		  $this->db->from('medik');
		  $this->db->where('user',$nisn);
		  $query=$this->db->get();

		  if($query->num_rows()>0){
		    return false;
		  }else{
		    return true;
		  }

		}

		function get_no_reg()
		{
	        $q = $this->db->query("SELECT MAX(RIGHT(no_regis,4)) AS kd_max FROM calonsiswa WHERE DATE(date_created)=CURDATE()");
	        $kd = "";
	        if($q->num_rows()>0){
	            foreach($q->result() as $k){
	                $tmp = ((int)$k->kd_max)+1;
	                $kd = sprintf("%04s", $tmp);

	            }
	        }else{
	            $kd = "0001";
	        }
	        date_default_timezone_set('Asia/Makassar');
	        return date("d").time("mm").$kd;
		    }


		    function dokter(){


			$this->db->order_by('id','ASC');
			$dokter= $this->db->get('dokter');


			return $dokter->result_array();


}

		 
		
	}
?>
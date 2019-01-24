<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gigi extends CI_Model {

	public function data_odontogram_pasien($id_pasien)
	{
		$this->db->select('*');
		$this->db->from('tb_odontogram');
		$this->db->join('tb_kondisi_gigi', 'tb_odontogram.p_kondisi = tb_kondisi_gigi.id_kg', 'left');
		$this->db->where('id_pasien', $id_pasien);
		return $this->db->get();
	}

}

/* End of file Model_gigi.php */
/* Location: ./application/models/Model_gigi.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gigi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model','mm');
		$this->load->model('model_gigi','mg');
	}
	public function index()
	{
		$this->load->view('pages/gigi/v_kondisi_gigi');
	}
	public function data_dg()
	{
		$id_parent = $this->uri->segment(3);
		$result = $this->mm->getData('tb_detail_gigi','id_parent',$id_parent);
		echo json_encode($result->result());
	}
	public function tambah_kondisi()
	{
		$data = [
			"nama_kondisi" => $this->input->post('nama_kondisi'),
			"kode_warna" => $this->input->post('kw')
		];
		$this->mm->insert('tb_kondisi_gigi',$data);
		// Return pesan
		echo json_encode(array("status" => 1, "pesan" => "Data berhasil di simpan"));
	}
	public function data_kondisi()
	{
		$data = $this->mm->get_table('tb_kondisi_gigi')->result();
		echo json_encode($data);
	}
	public function hapus()
	{
		$id = $this->input->get('id');
		$this->mm->delete('tb_kondisi_gigi','id_kg',$id);
	}
	public function data_edit()
	{
		$data = $this->mm->getData('tb_kondisi_gigi','id_kg',$this->input->get('id'))->row_array();
		echo json_encode($data);
	}
	public function edit()
	{
		$id = $this->input->post('id');
		$nama_kondisi = $this->input->post('nama_kondisi');
		$kode_warna = $this->input->post('kode_warna');

		$data = [
			"nama_kondisi" => $nama_kondisi,
			"kode_warna" => $kode_warna
		];
		$this->mm->update('tb_kondisi_gigi',$data,'id_kg',$id);
		// Return pesan
		echo json_encode(array("status" => 1, "pesan" => "Data berhasil di simpan"));
	}
	public function odonto_pelayanan()
	{
		$data['odonto'] = $this->mg->data_odontogram_pasien($this->uri->segment(3))->result();
		$this->load->view('pages/gigi/v_odonto_pelayanan', $data);
	}
	public function data_odonto()
	{
		$id_pasien = $this->input->get('id_pasien');
		$dg = $this->input->get('dg');

		$data = $this->db->query("SELECT p_kondisi FROM tb_odontogram WHERE id_pasien='$id' AND p_gigi='$dg'")->row_array();

		echo json_encode($data);
	}
	public function simpan_odontogram()
	{
		$id = $this->input->post('id_pasien');
		$dg = $this->input->post('dg');
		$kg = $this->input->post('kg');

		$data = [
			"id_pasien" => $id,
			"p_gigi" => $dg,
			"p_kondisi" => $kg 
		];

		$cek = $this->db->query("SELECT id_odo FROM tb_odontogram WHERE id_pasien='$id' AND p_gigi='$dg'");
		if ($cek->num_rows() > 0) {
			$x = $cek->row_array();
			$this->mm->update('tb_odontogram',$data,'id_odo',$x['id_odo']);
		} else {
			$this->mm->insert('tb_odontogram',$data);
		}
		
		// Return pesan
		echo json_encode(array("status" => 1, "pesan" => "Data berhasil di simpan"));
	}
	// public function dummy()
	// {
	// 	$tdg = $this->db->get('tb_gigi')->result();
	// 		foreach ($tdg as $d) {
	// 			for($j=1; $j <= 5; $j++) {
	// 				if ($j==1) {
	// 					$data = [
	// 						"nama_gd" => 'P'.$d->nama_gigi.'T',
	// 						"id_parent" => $d->id_gigi
	// 					];	
	// 					$this->db->insert('tb_detail_gigi', $data);
	// 				} elseif ($j==2) {
	// 					$data = [
	// 						"nama_gd" => 'P'.$d->nama_gigi.'L',
	// 						"id_parent" => $d->id_gigi
	// 					];	
	// 					$this->db->insert('tb_detail_gigi', $data);
	// 				} elseif ($j==3) {
	// 					$data = [
	// 						"nama_gd" => 'P'.$d->nama_gigi.'R',
	// 						"id_parent" => $d->id_gigi
	// 					];	
	// 					$this->db->insert('tb_detail_gigi', $data);
	// 				} elseif ($j==4) {
	// 					$data = [
	// 						"nama_gd" => 'P'.$d->nama_gigi.'B',
	// 						"id_parent" => $d->id_gigi
	// 					];	
	// 					$this->db->insert('tb_detail_gigi', $data);
	// 				} elseif ($j==5) {
	// 					$data = [
	// 						"nama_gd" => 'P'.$d->nama_gigi.'M',
	// 						"id_parent" => $d->id_gigi
	// 					];
	// 					$this->db->insert('tb_detail_gigi', $data);	
	// 				}
					
	// 			}
	// 		}
	// }

}

/* End of file Gigi.php */
/* Location: ./application/controllers/Gigi.php */
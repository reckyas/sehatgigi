<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model','mm');
	}
	public function index()
	{
		$data['kategori_dokter'] = $this->mm->get_table('tb_kategori_dokter')->result();
		$this->load->view('pages/dokter/v_list',$data);
	}
	public function data_dokter()
	{
		$data = $this->mm->get_table_join('tb_dokter','tb_kategori_dokter','tb_dokter.kategori_dokter=tb_kategori_dokter.id_katdok')->result();
		echo json_encode($data);
	}
	public function tambah_dokter()
	{
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$temla = $this->input->post('temla');
		$tl = $this->input->post('tl');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$kategori_dokter = $this->input->post('kategori_dokter');
		$nama_gelar = $this->input->post('nama_gelar');

		$data = [
			"nama" => $nama,
			"jenis_kelamin" => $gender,
			"tempat_lahir" => $temla,
			"tanggal_lahir" => $tl,
			"nik" => $nik,
			"alamat" => $alamat,
			"kategori_dokter" => $kategori_dokter,
			"nama_dengan_gelar" => $nama_gelar
		];

		$this->mm->insert('tb_dokter',$data);
		// Return pesan
		echo json_encode(array("status" => 1, "pesan" => "Dokter ".$nama_gelar." berhasil di tambahkan"));
	}
	public function data_edit()
	{
		$id = $this->input->get('id_dokter');
		$data = $this->mm->get_data_join('tb_dokter','tb_kategori_dokter','tb_dokter.kategori_dokter=tb_kategori_dokter.id_katdok','id_dokter',$id)->row_array();
		echo json_encode($data);
	}
	public function edit_dokter()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$temla = $this->input->post('temla');
		$tl = $this->input->post('tl');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$kategori_dokter = $this->input->post('kategori_dokter');
		$nama_gelar = $this->input->post('nama_gelar');

		$data = [
			"nama" => $nama,
			"jenis_kelamin" => $gender,
			"tempat_lahir" => $temla,
			"tanggal_lahir" => $tl,
			"nik" => $nik,
			"alamat" => $alamat,
			"kategori_dokter" => $kategori_dokter,
			"nama_dengan_gelar" => $nama_gelar
		];

		$this->mm->update('tb_dokter',$data,'id_dokter',$id);
		// Return pesan
		echo json_encode(array("status" => 1, "pesan" => "Data berhasil di edit"));
	}
	public function hapus()
	{
		$id = $this->input->get('id_dokter');
		$this->mm->delete('tb_dokter','id_dokter',$id);
	}
}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */
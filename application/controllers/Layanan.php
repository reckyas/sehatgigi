<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model','mm');
		$this->load->model('model_pasien','mp');
	}
	public function rute($rute,$id_pasien=null)
	{
		if ($rute=='rj') {
			self::c_rawat_jalan($id_pasien);
		} elseif($rute=='ri') {
			
		} elseif ($rute=='gd') {
			
		}
		
	}
	public function c_rawat_jalan($id_pasien=null)
	{
		$data['data_pasien'] = $this->mp->data_layanan_pasien($id_pasien)->row_array();
		$data['dokter'] = $this->mm->get_table('tb_dokter')->result();
		$data['kg'] = $this->mm->get_table('tb_kondisi_gigi')->result();
		$this->load->view('pages/pelayanan/component_pasien_rawat_jalan', $data);
	}

	public function tambah_data_medik()
	{
		$goldar = $this->input->post('gol_dar');
		$tekanan_darah = $this->input->post('tekanan_darah');
		$penyakit_jantung = $this->input->post('penyakit_jantung');
		$diabetes = $this->input->post('diabetes');
		$heemopilia = $this->input->post('heemopilia');
		$hepatitis = $this->input->post('hepatitis');
		$gastritis = $this->input->post('gastritis');
		$penyakit_lainya = $this->input->post('penyakit_lainya');
		$alergi_obat = $this->input->post('alergi_terhadap_obat');
		$alergi_makanan = $this->input->post('alergi_terhadap_makanan');
		$kayegori_pasien = $this->input->post('kategori_pasien');
		$data = [
			"tekanan_darah" => $tekanan_darah,
			"penyakit_jantung" => $penyakit_jantung,
			"diabetes" => $diabetes,
			"heemopilia" => $heemopilia,
			"hepatitis" => $hepatitis,
			"gastritis" => $gastritis,
			"penyakit_lainya" => $penyakit_lainya,
			"alergi_terhadap_obat" =>$alergi_obat,
			"alergi_terhadap_makanan" =>$alergi_makanan,
			"kategori_pasien" => $this->input->post('kategori_pasien'),
			"operator" => $this->session->userdata('username')
		];
		$datag = ["golongan_darah" => $goldar];
		$this->mm->update('tb_pasien',$datag,'id',$this->input->post('id'));
		$this->mm->update('tb_detail_pasien',$data,'id_detail',$this->input->post('id_pasien'));
		$pesan = ['status'=>1,'Pesan' => 'Data medik berhasil di simpan'];
		echo json_encode($pesan);
	}
	public function tambah_data_diagnosa()
	{
		$dokter = $this->input->post('dokter');
		$pemeriksaan = $this->input->post('pemeriksaan');
		$diagnosis = $this->input->post('diagnosis');
		$obat = $this->input->post('obat');
		$tindakan = $this->input->post('tindakan');
		$biaya = $this->input->post('biaya');
		$catatan = $this->input->post('catatan');
		$anamnesa = $this->input->post('anamnesa');

		$data = [
			"id_pasien_diagnosa" => $this->input->post('idd'),
			"dokter_gigi" => $dokter,
			"anamnesa" => $anamnesa,
			"pemeriksaan" => $pemeriksaan,
			"diagnosis" => $diagnosis,
			"obat" => $obat,
			"tindakan" => $tindakan,
			"biaya" => $biaya,
			"catatan" => $catatan
		];

		$cek_id = $this->mm->getData('tb_diagnosa','id_pasien_diagnosa',$this->input->post('id'));
		if ($cek_id->num_rows() > 0) {
			$this->mm->update('tb_diagnosa',$data,'id_pasien_diagnosa',$this->input->post('id'));
		} else {
			$this->mm->insert('tb_diagnosa',$data);
		}
		$pesan = ['status'=>1,'Pesan' => 'Data diagnosa berhasil di simpan'];
		echo json_encode($pesan);
	}
	public function selesai()
	{
		$id = $this->uri->segment(3);
		$data = [
			"status_pelayanan" => "Terlayani"
		];
		$this->mm->update('tb_detail_pasien',$data,'id_detail',$id);
		
	}
}

/* End of file Layanan.php */
/* Location: ./application/controllers/Layanan.php */
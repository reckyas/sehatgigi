<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model','mm');
		$this->load->model('model_pasien','mp');
		if ($this->session->userdata('masuk')!==true) {
			redirect('login','refresh');
		}
	}
	public function antrian()
	{
		$this->load->view('pages/home/home');
	}
	public function index()
	{
		$data = '';
		$this->load->view('template_part/header', $data);
		$this->load->view('template_part/sidebar', $data);
		$this->load->view('pages/home/home', $data);
		$this->load->view('template_part/footer', $data);
		$this->load->view('template_part/setting', $data);
		$this->load->view('template_part/script', $data);
	}
	function tambah_pasien()
	{
		// Buat ID Pasien

		$id = 'P'.date('ymdhis'); // ID Pasien di ambil dari tahun bulan tanggal jam menit detik pada saat daftar

		// Ambil data
		$nama = preg_replace("/[^a-zA-Z\']/", "", $this->input->post('nama'));
		$tempat_lahir = preg_replace("/[^a-zA-Z0-9\']/", "",$this->input->post('tempat_lahir'));
		$tgl_lahir = $this->input->post('tgl_lahir');
		$nik = preg_replace("/[^0-9']/", "",$this->input->post('nik'));
		$jk = $this->input->post('jk');
		$pekerjaan = preg_replace("/[^a-zA-Z0-9\']/", "",$this->input->post('pekerjaan'));
		$ibu_kandung = preg_replace("/[^a-zA-Z\']/", "",$this->input->post('ibu_kandung'));
		$alamat = preg_replace("/[^a-zA-Z0-9\']/", "",$this->input->post('alamat'));
		$tlp = preg_replace("/[^0-9']/", "",$this->input->post('tlp'));

		// Kemas data dalam array
		$data = [
			"id" => $id,
			"nama" => $nama,
			"tempat_lahir" => $tempat_lahir,
			"tgl_lahir" => $tgl_lahir,
			"nik" => $nik,
			"jenis_kelamin" => $jk,
			"pekerjaan" => $pekerjaan,
			"ibu_kandung" => $ibu_kandung,
			"alamat" => $alamat,
			"tlp" => $tlp
		];

		// Masukan data ke database db_poliklinik.tb_pasien
		$this->mm->insert('tb_pasien',$data);

		// Masukan data detail id dan tanggal daftar
		$data_detail_awal = [
			"id_pasien" => $id,
			"status_pelayanan" => "Belum dilayani"
		];
		$this->mm->insert('tb_detail_pasien',$data_detail_awal);

		// Return pesan
		echo json_encode(array("status" => 1, "pesan" => "Pasien masuk ke antrian"));
	}
	public function data_antrian_pasien()
	{
		$data = $this->mp->data_antrian()->result();
		echo json_encode($data);
	}
	public function live_search()
	{
		// Ambil kata kunci 
		$keyword = $this->input->get('q');

		// Buat query cari
		$hasil = $this->mp->data_live_search_pasien($keyword);
		if ($hasil->num_rows() > 0) {
			$data = $hasil->result();
			$data[0]->status = 1;
			echo json_encode($data);
		} else {
			echo json_encode(['status' => 0, 'Pesan' => 'Data tidak di temukan']);
		}
	}
	public function daftar_pasien_lama()
	{
		$id_pasien = $this->input->get('id_pasien');
		// Masukan data detail id dan tanggal daftar
		$data = $this->mm->getData('tb_detail_pasien','id_pasien',$id_pasien,'*','waktu_berobat','desc',1)->row_array();
		$tgl_awal = date_create($data['waktu_berobat']);
		$tgl_sekarang = date_create(); // Waktu sekarang
		$selisih = date_diff($tgl_awal,$tgl_sekarang);
		if ($selisih->days >= 360) {
			$data_detail_awal = [
				"id_pasien" => $id_pasien,
				"status_pelayanan" => "Belum dilayani"
			];
		} elseif($selisih->days < 360) {
			$data_detail_awal = [
				"id_pasien" => $id_pasien,
				"status_pelayanan" => "Belum dilayani",
				"tekanan_darah" => $data['tekanan_darah'],
				"penyakit_jantung" => $data['penyakit_jantung'],
				"diabetes" => $data['diabetes'],
				"heemopilia" => $data['heemopilia'],
				"hepatitis" => $data['hepatitis'],
				"gastritis" => $data['gastritis'],
				"penyakit_lainya" => $data['penyakit_lainya'],
				"alergi_terhadap_obat" => $data['alergi_terhadap_obat'],
				"alergi_terhadap_makanan" => $data['alergi_terhadap_makanan'],
				"kategori_pasien" => 1
			];
		}
		
		$this->mm->insert('tb_detail_pasien',$data_detail_awal);

		// Return pesan
		echo json_encode(array("status" => 1, "pesan" => "Pasien masuk ke antrian"));
	}
	public function layani()
	{
		$data['data_pasien'] = $this->mp->data_layanan_pasien($this->uri->segment(3))->row_array();
		$data['dokter'] = $this->mm->get_table('tb_dokter')->result();
		$data['kg'] = $this->mm->get_table('tb_kondisi_gigi')->result();
		$this->load->view('template_part/header', $data);
		$this->load->view('template_part/sidebar', $data);
		$this->load->view('pages/pelayanan/v_layanan', $data);
		$this->load->view('template_part/footer', $data);
		$this->load->view('template_part/setting', $data);
		$this->load->view('template_part/script', $data);
	}
	public function batal()
	{
		$data = ["status_pelayanan" => 'Di batalkan'];
		$this->mm->update('tb_detail_pasien',$data,'id_detail',$this->input->get('id_pasien'));
	}

}

/* End of file App.php */
/* Location: ./application/controllers/App.php */
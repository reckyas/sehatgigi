<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model','mm');
		$this->load->model('model_pasien','mp');
	}
	function get_data_pasien()
    {
        $list = $this->mp->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->id;
            $row[] = $field->nama;
            $row[] = $field->alamat;
            if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 3) {
                $row[] = '<a href="'.base_url("pasien/open/").$field->id.'" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>&nbsp;<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash" onclick=hapus("'.$field->id.'")></i></a>';
            } else {
               $row[] = '<a href="'.base_url("pasien/open/").$field->id.'" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>&nbsp;'; 
            }
            
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mp->count_all(),
            "recordsFiltered" => $this->mp->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    function get_data_laporan_pasien()
    {
    	$awal = $this->input->post('awal');
    	$akhir =$this->input->post('akhir');
        $list = $this->mp->get_datatables($awal,$akhir);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->id;
            $row[] = $field->nama;
            $row[] = $field->alamat;
            $row[] = '<a href="'.base_url("pasien/open/").$field->id.'" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash" onclick="hapus('.$field->id.')"></i></a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mp->count_all(),
            "recordsFiltered" => $this->mp->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
	public function index()
	{
		$data['pasien'] = $this->mm->get_table('tb_pasien')->result();
		$this->load->view('pages/pasien/v_list',$data);
	}
	public function data_pasien_waktu()
	{
		$data['pasien'] = $this->mp->data_pasien_dengan_waktu($this->input->get('awal'),$this->input->get('akhir'))->result();
		$this->load->view('pages/pasien/v_list_with_date', $data);
	}

	public function open()
	{
		$data['pasien'] = $this->mp->data_kunjungan_pasien($this->uri->segment(3))->result();
		$this->load->view('template_part/header', $data);
		$this->load->view('template_part/sidebar', $data);
		$this->load->view('pages/pasien/v_list_tanggal', $data);
		$this->load->view('template_part/footer', $data);
		$this->load->view('template_part/setting', $data);
		$this->load->view('template_part/script', $data);
	}

	public function detail()
	{
		$data['pasien'] = $this->mp->data_detail_pasien($this->uri->segment(3),$this->uri->segment(4))->row_array();
		$data['odonto_kondisi'] = $this->mm->get_table('tb_kondisi_gigi')->result();
		$this->load->view('template_part/header', $data);
		$this->load->view('template_part/sidebar', $data);
		$this->load->view('pages/pasien/v_detail', $data);
		$this->load->view('template_part/footer');
		$this->load->view('template_part/setting');
		$this->load->view('template_part/script');
	}
    public function hapus()
    {
        $id = $this->input->get('id');
        $this->mm->delete('tb_pasien','id',$id);
    }
}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */
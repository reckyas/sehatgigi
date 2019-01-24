<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pasien extends CI_Model {

	var $table = 'tb_pasien'; //nama tabel dari database
    var $column_order = array(null, 'id','nama','alamat'); //field yang ada di table user
    var $column_search = array('id','nama','alamat'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query($awal=null,$akhir=null)
    {
    	if ($awal !== null && $akhir !== null) {
    		$this->db->where('waktu_berobat >=', $awal);
			$this->db->where('waktu_berobat <=', $akhir);
    	} 
        $this->db->from($this->table);
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if(isset($_POST['search']['value'])) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($awal=null,$akhir=null)
    {
        $this->_get_datatables_query($awal,$akhir);
        if(isset($_POST['length']) != -1)
        $this->db->limit(isset($_POST['length']), isset($_POST['start']));
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
	public function data_antrian()
	{
		$this->db->select('nama,status_pelayanan,id,id_detail');
		$this->db->from('tb_pasien');
		$this->db->join('tb_detail_pasien', 'tb_pasien.id = tb_detail_pasien.id_pasien', 'left');
		$this->db->where('status_pelayanan', 'Belum dilayani');
		return $this->db->get();
	}
	public function data_live_search_pasien($keyword)
	{
		$this->db->select('id,nama,ibu_kandung,nik');
		$this->db->from('tb_pasien');
		$this->db->like('nama', $keyword, 'BOTH');
		return $this->db->get();
	}
	public function data_layanan_pasien($id_pasien)
	{
		$this->db->select('*');
		$this->db->from('tb_pasien');
		$this->db->join('tb_detail_pasien', 'tb_pasien.id = tb_detail_pasien.id_pasien', 'left');
		$this->db->join('tb_diagnosa', 'tb_detail_pasien.id_pasien = tb_diagnosa.id_pasien_diagnosa', 'left');
		$this->db->where('id', $id_pasien);
		$this->db->order_by('waktu_berobat', 'desc');
		$this->db->limit(1);
		return $this->db->get();

	}
	public function data_pasien_dengan_waktu($awal,$akhir)
	{
		$this->db->select('*');
		$this->db->from('tb_pasien');		
		$this->db->where('tanggal_daftar >=', $awal);
		$this->db->where('tanggal_daftar <=', $akhir);
		return $this->db->get();
	}
	public function data_kunjungan_pasien($id)
	{
		$this->db->select('waktu_berobat');
		$this->db->from('tb_detail_pasien');
		$this->db->where('id_pasien', $id);
		$this->db->order_by('waktu_berobat', 'desc');
		return $this->db->get();
	}

	public function data_detail_pasien($id,$tgl)
	{
		$tgl = str_replace('%20', ' ', $tgl);
		$this->db->select('*');
		$this->db->from('tb_pasien');
		$this->db->join('tb_detail_pasien', 'tb_pasien.id = tb_detail_pasien.id_pasien', 'left');
		$this->db->join('tb_diagnosa', 'tb_detail_pasien.id_detail = tb_diagnosa.id_pasien_diagnosa', 'left');
		$this->db->where('id', $id);
		$this->db->where('waktu_berobat', $tgl);
		return $this->db->get();
	}
}

/* End of file Model_pasien.php */
/* Location: ./application/models/Model_pasien.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

	var $table = 'tb_users'; //nama tabel dari database
    var $column_order = array(null, null,'username','fullname','gender','perm_desc'); //field yang ada di table user
    var $column_search = array('username','fullname','gender','perm_desc'); //field yang diizin untuk pencarian 
    var $order = array('id_user' => 'desc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query($awal=null,$akhir=null)
    {
        $this->db->from($this->table);
        $this->db->join('tb_permissions', 'tb_users.level = tb_permissions.perm_id', 'left');
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
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
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
    var $column_order_on = array(null,null,'username','perm_desc'); //field yang ada di table user
    var $column_search_on = array('username','status','perm_desc'); //field yang diizin untuk pencarian 
    var $order_on = array('id_user' => 'desc'); // default order 
 
    private function _get_datatables_query_on($awal=null,$akhir=null)
    {
        $this->db->from($this->table);
        $this->db->join('tb_permissions', 'tb_users.level = tb_permissions.perm_id', 'left');
        $i = 0;
        $this->db->where('status', 1);
     
        foreach ($this->column_search_on as $item) // looping awal
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
 
                if(count($this->column_search_on) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order_on[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order_on))
        {
            $order_on = $this->order_on;
            $this->db->order_by(key($order_on), $order_on[key($order_on)]);
        }
    }
 
    function get_datatables_on($awal=null,$akhir=null)
    {
        $this->_get_datatables_query_on($awal,$akhir);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_on()
    {
        $this->_get_datatables_query_on();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all_on()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */
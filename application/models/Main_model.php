<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function get_table($table,$field='*',$orderBy ='',$order='asc',$limit=null)
	{
		$this->db->select($field);
		$this->db->from($table);
		if ($orderBy!=='') {
			$this->db->order_by($orderBy, $order);
		}
		if ($limit==null) {
			$this->db->limit($limit);
		}
		return $this->db->get();
	}
	public function get_table_join($table,$tableJoin,$joinWith,$type='left',$field='*')
	{
		$this->db->select($field)->from($table)->join($tableJoin, $joinWith, $type);
		return $this->db->get();
	}
	public function get_data_join($table,$tableJoin,$joinWith,$where,$value,$type='left',$field='*')
	{
		$this->db->select($field)->from($table)->join($tableJoin, $joinWith,$type)->where($where, $value);
		return $this->db->get();
	}
	public function getData($table,$where,$value,$field='*',$orderBy='',$order='asc',$limit=null)
	{
		$this->db->select($field);
		$this->db->from($table);
		$this->db->where($where, $value);
		if ($orderBy!=='') {
			$this->db->order_by($orderBy, $order);
		}
		if ($limit!==null) {
			$this->db->limit($limit);
		}
		return $this->db->get();
	}
	function getDataById ($table,$where,$id) {
		return $this->db->select('*')->from($table)->where($where,$id)->get();
	}
	public function insert($table,$data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}
	public function update($table,$data,$where,$value)
	{
		$result = $this->db->where($where, $value)->update($table, $data);
		return $result;
	}
	public function delete($table,$where,$value)		
	{
		$this->db->where($where, $value)->delete($table);
	}
}

/* End of file Main_model.php */
/* Location: ./application/models/Main_model.php */
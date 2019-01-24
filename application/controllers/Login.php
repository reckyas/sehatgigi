<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model','ms');
		$this->load->helper(array('cookie'));
		
		
	}
	public function index()
	{
		$this->load->view('pages/login/login');
	}
	public function auth()
	{
		$username = htmlspecialchars(addslashes($this->input->post('username')));
		$password = htmlspecialchars(addslashes($this->input->post('password')));
		$use_cookie = $this->input->post('remember');
		$cek_username = $this->ms->getData('tb_users','username',$username,$field='*');
		if ($cek_username->num_rows() > 0) {
			$data = $cek_username->row_array();
			if (password_verify($password,$data['password'])) {
				self::registerSession($data);
				if (!empty($use_cookie)) {
					self::registerCookie($data['user_id']);
				}
				$datauser = ['status'=>1];
				$this->ms->update('tb_users',$datauser,'id_user',$data['id_user']);
				redirect('app','refresh');

			} else {
				$this->session->set_flashdata('pesan', 'username atau password salah');
				redirect('login','refresh');
			}
		} else {
			$this->session->set_flashdata('pesan', 'username atau password salah');
			redirect('login','refresh');
		}
	}
	public function registerSession($data)
	{
		$info = [
			"masuk" => true,
			"id" => $data['id_user'],
			"username" => $data['username'],
			"fullname" => $data['fullname'],
			"photo" => $data['photo'],
			"level" => $data['level']
		];
		$this->session->set_userdata($info);
	}
	public function registerCookie($id)
	{
		$this->load->helper('string');
		$key = random_string('alnum', 64);
		$this->input->set_cookie('login', $key, 3600*24*30);
		$data = [
			"user_token" => $key
		];
		$this->ms->update('tb_users',$data,'user_id',$id);
	}
	public function getCookie()
	{
		$cookie = get_cookie('login');
		if ($cookie <> '') {
			$row = $this->ms->getData('tb_users','user_token',$cookie)->row_array();
			if ($row) {
				self::registerSession($row);
				redirect('app','refresh');
			}
		}
	}
	public function logout()
	{
		$datauser = ['status'=>0];
		$this->ms->update('tb_users',$datauser,'id_user',$this->session->userdata('id'));
		session_destroy();
		delete_cookie('login');
		redirect('login','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
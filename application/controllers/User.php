<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('main_model','mm');
		$this->load->model('model_user','mu');
	}
	public function index()
	{
		$data['perm'] = $this->mm->get_table('tb_permissions')->result();
		$this->load->view('pages/user/v_user',$data);
	}
	public function get_data_users()
	{
		$list = $this->mu->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = '<img src="'.base_url("/resources/img/profil/").$field->photo.'" alt="'.$field->username.'" style="width:45px;">';
            $row[] = $field->username;
            $row[] = $field->fullname;
            $row[] = $field->gender;
            $row[] = $field->perm_desc;
            $row[] = '<button type="button" class="btn btn-sm btn-warning" onclick="user_edit('.$field->id_user.')" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button>&nbsp;<button type="button" class="btn btn-sm btn-danger" onclick="hapus('.$field->id_user.')"><i class="fa fa-trash"></i></button>';
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mu->count_all(),
            "recordsFiltered" => $this->mu->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}
	public function get_data_users_on()
	{
		$list = $this->mu->get_datatables_on();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = '<img src="'.base_url("/resources/img/profil/").$field->photo.'" alt="'.$field->username.'" style="width:45px;">';
            $row[] = $field->username;
            $row[] = 'Online';
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->mu->count_all(),
            "recordsFiltered" => $this->mu->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}
	public function tambah()
	{
		$username = $this->input->post('username_t');
		$password = $this->input->post('password_t');
		$user_level = $this->input->post('perm');
		$fullname = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$gambar = $_FILES['photo']['name'];
		// Hash password
		$password = password_hash($password, PASSWORD_DEFAULT);
		// Masukan data
		if (!empty($gambar)) {
			$config['upload_path'] = './resources/img/profil';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['max_size'] = 2000;
	        $config['max_width'] = 5000;
	        $config['max_height'] = 5000;
	        $config['encrypt_name']	= TRUE;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('photo'))
	        {
	                $error = array('error' => $this->upload->display_errors());
	                echo json_encode(['pesan' => $error]);
	        } else {
	        	// compress gambar
		        $gbr = $this->upload->data();
		        $config['image_library'] = 'gd2';
		        $config['source_image'] = './resources/img/profil/'.$gbr['file_name'];
		        $config['create_thumb'] = false;
		        $config['maintain_ratio'] = false;
		        $config['quality'] = '50%';
		        $config['width'] = 300;
		        $config['height'] = 300;
		        $config['new_image'] = './resources/img/profil/'.$gbr['file_name'];
		        $this->load->library('image_lib',$config);
		        $this->image_lib->resize();
		        // Masukan Data
		        $nama_gambar = $_FILES['photo']['name'];
		        $nama_gambar = explode('.', $nama_gambar);
		        $nama_gambar = $nama_gambar[0];
		        $data = [
		        	"username" => $username,
		        	"password" => $password,
		        	"level" => $user_level,
		        	"fullname" => $fullname,
		        	"gender" => $gender,
		        	"photo" => $gbr['file_name']
		        ];
		        $this->mm->insert('tb_users',$data);
		        echo json_encode(array("status" => 1, "pesan" => "Data berhasil di simpan"));
	        }
		} else {
			if ($gender=='L') {
				$photo = 'male.png';
			} else {
				$photo = 'female.png';
			}
			$data = [
	        	"username" => $username,
	        	"password" => $password,
	        	"level" => $user_level,
	        	"fullname" => $fullname,
	        	"gender" => $gender,
	        	"photo" => $photo
	        ];
	        $this->mm->insert('tb_users',$data);
	        echo json_encode(array("status" => 1, "pesan" => "Data berhasil di simpan"));
		}
	}
	public function data_edit()
	{
		$id = $this->input->get('id_user');
		$data = $this->mm->get_data_join('tb_users','tb_permissions','tb_users.id_user=tb_permissions.perm_id','id_user',$id)->row_array();
		echo json_encode($data);
	}
	public function edit()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username_t');
		$password = $this->input->post('password_t');
		$user_level = $this->input->post('perm');
		$fullname = $this->input->post('nama');
		$gender = $this->input->post('gender');
		$gambar = $_FILES['photo']['name'];
		// Hash password
		if ($password!=='') {
			$password = password_hash($password, PASSWORD_DEFAULT);
		}
		// Masukan data
		if (!empty($gambar)) {
			// Hapus gambar
			$gambar_lama = $this->mm->getData('tb_users','id_user',$id)->row_array();
			$file = './resources/img/profil/'.$gambar_lama['photo'];
			if ($gambar_lama['photo'] !== 'male.png' || $gambar_lama['photo'] !=='female.png') {
				if (is_readable($file)) {
					unlink($file);
				}
			}
			// 
			$config['upload_path'] = './resources/img/profil';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['max_size'] = 2000;
	        $config['max_width'] = 5000;
	        $config['max_height'] = 5000;
	        $config['encrypt_name']	= TRUE;
	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('photo'))
	        {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode(['pesan' => $error]);
	        } else {
	        	// compress gambar
		        $gbr = $this->upload->data();
		        $config['image_library'] = 'gd2';
		        $config['source_image'] = './resources/img/profil/'.$gbr['file_name'];
		        $config['create_thumb'] = false;
		        $config['maintain_ratio'] = false;
		        $config['quality'] = '50%';
		        $config['width'] = 300;
		        $config['height'] = 300;
		        $config['new_image'] = './resources/img/profil/'.$gbr['file_name'];
		        $this->load->library('image_lib',$config);
		        $this->image_lib->resize();
		        // Masukan Data
		        $nama_gambar = $_FILES['photo']['name'];
		        $nama_gambar = explode('.', $nama_gambar);
		        $nama_gambar = $nama_gambar[0];
		        if ($password!==null) {
			        $data = [
			        	"username" => $username,
			        	"password" => $password,
			        	"level" => $user_level,
			        	"fullname" => $fullname,
			        	"gender" => $gender,
			        	"photo" => $gbr['file_name']
			        ];
		        } else {
		        	$data = [
			        	"username" => $username,
			        	"level" => $user_level,
			        	"fullname" => $fullname,
			        	"gender" => $gender,
			        	"photo" => $gbr['file_name']
			        ];
		        }
		        $this->mm->update('tb_users',$data,'id_user',$id);
	        }
		} else {
			$jk_old = $this->mm->getData('tb_users','id_user',$id,'gender')->row_array()['gender'];
			if ($gender !== $jk_old) {
				if ($gender=='L') {
					$photo = 'male.png';
				} else {
					$photo = 'female.png';
				}
				
				if ($password!=='') {
					$data = [
			        	"username" => $username,
			        	"password" => $password,
			        	"level" => $user_level,
			        	"fullname" => $fullname,
			        	"gender" => $gender,
			        	"photo" => $photo
			        ];
				} else {
					$data = [
			        	"username" => $username,
			        	"level" => $user_level,
			        	"fullname" => $fullname,
			        	"gender" => $gender,
			        	"photo" => $photo
			        ];
				}
			} else {
				if ($password!=='') {
					$data = [
			        	"username" => $username,
			        	"password" => $password,
			        	"level" => $user_level,
			        	"fullname" => $fullname,
			        	"gender" => $gender,
			        ];
				} else {
					$data = [
			        	"username" => $username,
			        	"level" => $user_level,
			        	"fullname" => $fullname,
			        	"gender" => $gender,
			        ];
				}
			}
	        $this->mm->update('tb_users',$data,'id_user',$id);
		}
		echo json_encode(array("status" => 1, "pesan" => "Data berhasil di edit"));
	}
	public function hapus()
	{
		$id = $this->input->get('id_user');
		$this->mm->delete('tb_users','id_user',$id);
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
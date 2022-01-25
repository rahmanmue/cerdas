<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('password');
        $this->load->Model('M_User');
    }

	// ====== UNTUK CRUD PENGGUNA ========

	// public function pengguna(){
	// 	adaUserId();

	// 	$template = 'index';
	// 	$listUser = $this->M_User->list();
	// 	$data=[
	// 	'title'=>'Pengguna',
	// 	'listUser'=> $listUser,
	// 	'content'=>'admin/list_user'
	// 	];

    // $this->load->view($template,$data);

	// }

	// public function edit(){
	// 	$template = 'index';

    //     $this->form_validation->set_rules('nama', 'Nama', 'required');

    //     if($this->form_validation->run()==FALSE){
    //         $data=[
    //             'title'=>'Edit Pengguna',
    //             'content'=>'admin/form_user',
    //             'user'=>$this->M_User->detail($this->input->post('id_user')),
    //             'action'=>base_url('admin/edit'),
    //             'button'=>'Edit'
    //         ];

    //     $this->load->view($template, $data);
    //     }else{
    //         if($this->input->post('password') == ''){
	// 			$dataUser=[
	// 			   'nama' => $this->input->post('nama',true),
	// 			   'email' => $this->input->post('email',true),
	// 			   'password' => $this->input->post('passwordLama',true),
	// 			   'status'=>$this->input->post('status',true) 
	// 			];
	// 		 }else if(strlen($this->input->post('password')) > 1 && strlen($this->input->post('password')) < 3){
	// 			$this->session->set_flashdata('gagal','password kurang dari 3 Karakter');	
	// 			redirect('admin/pengguna');				
	// 		 }else{
	// 			$dataUser=[
	// 			   'nama' => $this->input->post('nama',true),
	// 			   'email' => $this->input->post('email',true),
	// 			   'password' => $this->password->hash($this->input->post('password',true)),
	// 			   'status'=>$this->input->post('status',true)
	// 			];
	// 		}   
	// 		$this->M_User->edit($dataUser);
	// 		redirect('admin/pengguna');
        
    //     }

	// }

	// public function hapus($id){
	// 	$this->M_User->hapus($id);
    //     redirect('admin/pengguna');
	// }

	// ====== / UNTUK CRUD PENGGUNA ======== //
	
	
	public function login()
	{

		$user_id = $this->session->userdata('user_id');
		if($user_id){
			if($this->M_User->detail($user_id)->status == 'admin'){
				redirect('video');
			}else if($this->M_User->detail($user_id)->status == 'siswa'){
				redirect('siswa');
		}else{
			$this->load->view('home');
		}
	
		}
		
		
		$this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
   
		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			// karena Pengecekan Jadi buat Variabel baru buat session
			if($user = $this->M_User->login($email, $password)){
				$dataLogin = [
				'user_id'    =>  $user->id_user,
				'nama'		  =>  $user->nama
			];

			$this->session->set_userdata($dataLogin);
			
			
				if($this->M_User->detail($dataLogin['user_id'])->status == 'admin'){
					redirect('video');
				}else{
					redirect('siswa');
				}


			}else{

				$data = [
					'pesan' => 'Email atau Password yang anda masukan salah'
				];

			$this->session->set_flashdata($data);
			// $this->session->set_userdata($dataLogin);
			// $this->session->mark_as_flash($data);
			//tampilkan halaman login
			// $this->load->view('login.php',$data);
			redirect('login');
		}

	  	}
	}


	public function register(){

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
		// $this->form_validation->set_rules('konfirmasi', 'Konfirmasi Password', 'required|matches[password]');

		if($this->form_validation->run() == FALSE){
			$this->load->view('daftar.php');
		}else{
		$data =[
			'nama' => $this->input->post('nama',true),
			'email' => $this->input->post('email',true),
			'password' => $this->password->hash($this->input->post('password',true)),
			'status'=>'siswa'
		];

		$this->M_User->tambah($data);
		redirect('login');
		
		}  

	}


	public function logout()
	{
		$dataLogin = ['user_id','nama'];
		$this->session->unset_userdata($dataLogin);
		$this->session->sess_destroy();
		redirect('home');
	}


}
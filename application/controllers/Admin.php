<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('password');
        $this->load->Model('M_User');
    }
	
	
	public function login()
	{

		$user_id = $this->session->userdata('user_id');
		if($user_id){
			if($this->M_User->detail($user_id)->status == 'admin'){
				redirect('video');
			}else if($this->M_User->detail($user_id)->status == 'admin'){
				redirect('siswa');
		}else{
			$this->load->view('home');
		}
	
		}
		
		
		$this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[3]');
   
		if($this->form_validation->run() == FALSE){
			$this->load->view('login.php');
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
			$this->session->set_userdata($data);
			$this->session->mark_as_flash($data);
			//tampilkan halaman login
			// $this->load->view('login.php',$data);
			redirect('admin/login');
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
		redirect('welcome');
		
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
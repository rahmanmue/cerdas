<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// public $user_id = $this->session->userdata('user_id');
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library('password');
        $this->load->Model('M_User');
    }
	
	
	public function login()
	{
		// if ($user_id){
		// 	// redirect('admin');
		// }

		
		$this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
   
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
			//pindahkan ke halaman home
			redirect('welcome');

			}else{

				$dataPesan = [
					'alert' => 'alert-danger',
					'pesan' => 'Email atau Password yang anda masukan salah'
				];

			$this->session->set_flashdata($dataPesan);
			//tampilkan halaman login
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
			'status'=>'admin'
		];

		$this->M_User->tambah($data);
		redirect('welcome');
		
		}  

	}


	public function logout()
	{
		$dataLogin = ['user_id','nama'];
		$this->session->unset_userdata($dataLogin);
		redirect('login_u');
	}


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Siswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->Model(['M_Siswa','M_Games']);
    }
	
	public function index(){
		$template = 'index';
		$data=[
		'judul'=>'Mata Pelajaran',
		'content'=>'siswa/index'
		];

        $this->load->view($template,$data);
	}

	public function video($kelas){
		$template = 'index';
		$data=[
			'judul'=>'Video Kelas '. $kelas,
			'kelas'=> $kelas,
			'listVideo'=> $this->M_Siswa->getListVideo($kelas),
			'contentHeader'=>'siswa/content_header',
			'content'=>'siswa/video'
		];

		$this->load->view($template,$data);

	}

	public function soal($kelas){
		$template = 'index';
		$data=[
			'judul'=>'Latihan Soal Kelas'.$kelas,
			'kelas'=> $kelas,
			'contentHeader'=>'siswa/content_header',
			'listMateri'=> $this->M_Siswa->getListMateri($kelas),
			'listSoal'=>$this->M_Siswa->getListSoal($kelas),
			'content'=>'siswa/soal'
		];

		$this->load->view($template,$data);

	}

	public function pembahasan($kelas){
		$template = 'index';
		$data=[
			'judul'=>'Pembahasan Kelas '. $kelas,
			'kelas'=> $kelas,
			'listMapel'=> $this->M_Siswa->getListMapel($kelas),
			'listSoalPembahasan'=>$this->M_Siswa->getListSoalPembahasan($kelas),
			'content'=>'siswa/pembahasan'
		];

		$this->load->view($template,$data);

	}

	public function games(){
		$template = 'index';
		$data=[
			'judul'=>'Games',
			'contentHeader'=>'siswa/content_header',
			'content'=>'siswa/games'
		];

		$this->load->view($template,$data);

}

public function tambahGames(){
	$template = 'index';
	
	
	$data=[
		'id_user' =>$this->input->post('id_user',true),
		'level' =>$this->input->post('level',true),
		'skor' =>$this->input->post('skor',true),
		'lama_pengerjaan' =>$this->input->post('lama_pengerjaan',true),
		'waktu_pengerjaan' =>date('Y-m-d H:i:s')
	];
	
	$this->M_Games->tambah($data);
	
	redirect('siswa/games');  


}

}

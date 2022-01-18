<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->Model(['M_Siswa']);
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

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	public function __construct()
   {
      parent::__construct();
    //   login();
    //   onlySuperAdmin();
      $this->load->Model(['M_Soal']);
   }

	public function index()
	{
		$template = 'index';
		$listSoal = $this->M_Soal->list();
		$data=[
		'judul'=>'Soal',
		'listSoal'=> $listSoal,
		'content'=>'admin/list_soal'
		];

    $this->load->view($template,$data);	
	}

 public function tambah(){
    $template = 'index';

    $this->form_validation->set_rules('tema', 'Tema', 'required');
    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('subtema', 'Sub Tema', 'required');
    $this->form_validation->set_rules('pembelajaran', 'Pembelajaran', 'required');
    $this->form_validation->set_rules('soal', 'Soal', 'required');
    $this->form_validation->set_rules('pilihan_A', 'Pilihan A', 'required');
    $this->form_validation->set_rules('pilihan_B', 'Pilihan B', 'required');
    $this->form_validation->set_rules('pilihan_C', 'Pilihan C', 'required');
    $this->form_validation->set_rules('pilihan_D', 'Pilihan D', 'required');

   

    if($this->form_validation->run()==FALSE){
       $data=[
          'title'=>'Tambah Pembahasan',
          'content'=>'admin/form_soal',
        //   'mapel'=>$this->M_Mapel->getAll(),
          'action'=>base_url('soal/tambah'),
          'button'=>'Tambah'
       ];
       $this->load->view($template, $data);
    }else{
       $data=[
           'kelas'=>$this->input->post('kelas',true),
           'tema'=>$this->input->post('tema',true),
           'subtema'=>$this->input->post('subtema',true),
           'pembelajaran'=>$this->input->post('pembelajaran',true),
           'soal'=>$this->input->post('soal',true),
        //    'id_mapel'=>$this->input->post('id_mapel',true),
           'pilihan_A'=>$this->input->post('pilihan_A',true),
           'pilihan_B'=>$this->input->post('pilihan_B',true),
           'pilihan_C'=>$this->input->post('pilihan_C',true),
           'pilihan_D'=>$this->input->post('pilihan_D',true),
           'jawaban'=>$this->input->post('jawaban',true),
           'gambar'=>$this->M_Soal->uploadGambar()
       ];

       $this->M_Soal->tambah($data);
      
       redirect('soal');  
    }
    

 }

 public function edit(){
    $template = 'index';

    $this->form_validation->set_rules('tema', 'Tema', 'required');
    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('subtema', 'Sub Tema', 'required');
    $this->form_validation->set_rules('pembelajaran', 'Pembelajaran', 'required');
    $this->form_validation->set_rules('soal', 'Soal', 'required');
    $this->form_validation->set_rules('pilihan_A', 'Pilihan A', 'required');
    $this->form_validation->set_rules('pilihan_B', 'Pilihan B', 'required');
    $this->form_validation->set_rules('pilihan_C', 'Pilihan C', 'required');
    $this->form_validation->set_rules('pilihan_D', 'Pilihan D', 'required');



    if($this->form_validation->run()==FALSE){
		$data=[
			'title'=>'Edit Pembahasan',
			'content'=>'admin/form_soal',
            // 'mapel'=>$this->M_Mapel->getAll(),
			'soal'=>$this->M_Soal->detail($this->input->post('id_soal')),
			'action'=>base_url('soal/edit'),
			'button'=>'Edit'
		 ];

       $this->load->view($template, $data);
    }else{
        $data=[
            'kelas'=>$this->input->post('kelas',true),
            'tema'=>$this->input->post('tema',true),
            'subtema'=>$this->input->post('subtema',true),
            'pembelajaran'=>$this->input->post('pembelajaran',true),
            'soal'=>$this->input->post('soal',true),
            // 'id_mapel'=>$this->input->post('id_mapel',true),
            'pilihan_A'=>$this->input->post('pilihan_A',true),
            'pilihan_B'=>$this->input->post('pilihan_B',true),
            'pilihan_C'=>$this->input->post('pilihan_C',true),
            'pilihan_D'=>$this->input->post('pilihan_D',true),
            'jawaban'=>$this->input->post('jawaban',true),
            'gambar'=>$this->M_Soal->uploadGambar() 
        ];

       $this->M_Soal->edit($data);
       
       redirect('soal');     
    }

 }

 public function hapus($id){
    $this->M_Soal->hapus($id);
    redirect('soal');

 }
}

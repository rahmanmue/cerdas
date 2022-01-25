<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct()
   {
      parent::__construct();
    //   login();
    //   onlySuperAdmin();
      $this->load->Model('M_Materi');
      adaUserId();
   }

	public function index()
	{
		$template = 'index';
		$listMateri = $this->M_Materi->list();
		$data=[
		'title'=>'Materi Pembelajaran',
		'listMateri'=> $listMateri,
		'content'=>'admin/list_materi'
		];

    $this->load->view($template,$data);	
	}

 public function tambah(){
    $template = 'index';

    $this->form_validation->set_rules('tema', 'Tema', 'required');
    $this->form_validation->set_rules('subtema', 'Sub Tema', 'required');
    $this->form_validation->set_rules('pembelajaran', 'Pembelajaran', 'required');

    if($this->form_validation->run()==FALSE){
       $data=[
          'title'=>'Tambah Video',
          'content'=>'admin/form_materi',
          'action'=>base_url('materi/tambah'),
          'button'=>'Tambah'
       ];
       $this->load->view($template, $data);
    }else{
       $data=[
          'tema'=>$this->input->post('tema',true),
          'subtema'=>$this->input->post('subtema',true),
          'pembelajaran'=>$this->input->post('pembelajaran',true)
       ];

       $this->M_Materi->tambah($data);
      
       redirect('materi');  
    }
    

 }

 public function edit(){
    $template = 'index';

    $this->form_validation->set_rules('tema', 'Tema', 'required');
    $this->form_validation->set_rules('subtema', 'Sub Tema', 'required');
    $this->form_validation->set_rules('pembelajaran', 'Pembelajaran', 'required');



    if($this->form_validation->run()==FALSE){
		$data=[
			'title'=>'Edit Materi',
			'content'=>'admin/form_materi',
			'materi'=>$this->M_Materi->detail($this->input->post('id_materi')),
			'action'=>base_url('materi/edit'),
			'button'=>'Edit'
		 ];

       $this->load->view($template, $data);
    }else{
		$data=[
            'tema'=>$this->input->post('tema',true),
            'subtema'=>$this->input->post('subtema',true),
            'pembelajaran'=>$this->input->post('pembelajaran',true)
		 ];

       $this->M_Materi->edit($data);
       
       redirect('materi');     
    }

 }

 public function hapus($id){
    $this->M_Materi->hapus($id);
    redirect('materi');

 }
}

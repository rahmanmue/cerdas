<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function __construct()
   {
      parent::__construct();
    //   login();
    //   onlySuperAdmin();
      $this->load->Model(['M_Video','M_Materi']);
      adaUserId();
   }

	public function index()
	{
		$template = 'index';
		$listVideo = $this->M_Video->list();
		$data=[
		'title'=>'Video Pembelajaran',
		'listVideo'=> $listVideo,
		'content'=>'admin/list_video'
		];

    $this->load->view($template,$data);	
	}

 public function tambah(){
    $template = 'index';

    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
   //  $this->form_validation->set_rules('tema', 'Tema', 'required');
   //  $this->form_validation->set_rules('subtema', 'Sub Tema', 'required');
   //  $this->form_validation->set_rules('pembelajaran', 'Pembelajaran', 'required');
    $this->form_validation->set_rules('linkvideo', 'Link Video', 'required');

    if($this->form_validation->run()==FALSE){
       $data=[
          'title'=>'Tambah Video',
          'content'=>'admin/form_video',
          'listMateri' => $this->M_Materi->list(),
          'action'=>base_url('video/tambah'),
          'button'=>'Tambah'
       ];
       $this->load->view($template, $data);
    }else{
       $data=[
          'judul'=>$this->input->post('judul',true),
          'kelas'=>$this->input->post('kelas',true),
         //  'tema'=>$this->input->post('tema',true),
         //  'subtema'=>$this->input->post('subtema',true),
         //  'pembelajaran'=>$this->input->post('pembelajaran',true),
          'id_materi'=>$this->input->post('id_materi',true),
          'link_video'=>$this->input->post('linkvideo',true)
       ];

       $this->M_Video->tambah($data);
      
       redirect('video');  
    }
    

 }

 public function edit(){
    $template = 'index';

    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
   //  $this->form_validation->set_rules('tema', 'Tema', 'required');
   //  $this->form_validation->set_rules('subtema', 'Sub Tema', 'required');
   //  $this->form_validation->set_rules('pembelajaran', 'Pembelajaran', 'required');
    $this->form_validation->set_rules('linkvideo', 'Link Video', 'required');


    if($this->form_validation->run()==FALSE){
		$data=[
			'title'=>'Edit Video',
			'content'=>'admin/form_video',
         'listMateri' => $this->M_Materi->list(),
			'video'=>$this->M_Video->detail($this->input->post('id_video')),
			'action'=>base_url('video/edit'),
			'button'=>'Edit'
		 ];

       $this->load->view($template, $data);
    }else{
		$data=[
			'judul'=>$this->input->post('judul',true),
			'kelas'=>$this->input->post('kelas',true),
			// 'tema'=>$this->input->post('tema',true),
			// 'subtema'=>$this->input->post('subtema',true),
			// 'pembelajaran'=>$this->input->post('pembelajaran',true),
         'id_materi'=>$this->input->post('id_materi',true),
			'link_video'=>$this->input->post('linkvideo',true)
		 ];

       $this->M_Video->edit($data);
       
       redirect('video');     
    }

 }

 public function hapus($id){
    $this->M_Video->hapus($id);
    redirect('video');

 }
}

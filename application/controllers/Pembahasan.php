<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembahasan extends CI_Controller {

	public function __construct()
   {
      parent::__construct();
    //   login();
    //   onlySuperAdmin();
      $this->load->Model(['M_Pembahasan','M_Mapel','M_Materi']);
      adaUserId();
      
   }

	public function index()
	{
		$template = 'index';
		$listPembahasan = $this->M_Pembahasan->list();
		$data=[
		'title'=>'Pembahasan',
		'listPembahasan'=> $listPembahasan,
		'content'=>'admin/list_pembahasan'
		];

    $this->load->view($template,$data);	
	}

 public function tambah(){
    $template = 'index';

    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('soal', 'Soal', 'required');
    $this->form_validation->set_rules('pilihan_A', 'Pilihan A', 'required');
    $this->form_validation->set_rules('pilihan_B', 'Pilihan B', 'required');
    $this->form_validation->set_rules('pilihan_C', 'Pilihan C', 'required');

   

    if($this->form_validation->run()==FALSE){
       $data=[
          'title'=>'Tambah Pembahasan',
          'content'=>'admin/form_pembahasan',
          'mapel'=>$this->M_Mapel->getAll(),
          'listMateri' => $this->M_Materi->list(),
          'action'=>base_url('pembahasan/tambah'),
          'button'=>'Tambah'
       ];
       $this->load->view($template, $data);
    }else{
       $data=[
           'kelas'=>$this->input->post('kelas',true),
           'soal'=>$this->input->post('soal',true),
           'id_mapel'=>$this->input->post('id_mapel',true),
           'pilihan_A'=>'A. '. $this->input->post('pilihan_A',true),
           'pilihan_B'=>'B. '. $this->input->post('pilihan_B',true),
           'pilihan_C'=>'C. '. $this->input->post('pilihan_C',true),
           'jawaban'=>$this->input->post('jawaban',true),
           'pembahasan'=>$this->input->post('pembahasan',true),
           'gambar'=>$this->M_Pembahasan->uploadGambar()
       ];

       $this->M_Pembahasan->tambah($data);
      
       redirect('pembahasan');  
    }
    

 }

 public function edit(){
    $template = 'index';

    $this->form_validation->set_rules('kelas', 'Kelas', 'required');
    $this->form_validation->set_rules('soal', 'Soal', 'required');
    $this->form_validation->set_rules('pilihan_A', 'Pilihan A', 'required');
    $this->form_validation->set_rules('pilihan_B', 'Pilihan B', 'required');
    $this->form_validation->set_rules('pilihan_C', 'Pilihan C', 'required');


    if($this->form_validation->run()==FALSE){
		$data=[
			'title'=>'Edit Pembahasan',
			'content'=>'admin/form_pembahasan',
         'mapel'=>$this->M_Mapel->getAll(),
         'listMateri' => $this->M_Materi->list(),
			'pembahasan'=>$this->M_Pembahasan->detail($this->input->post('id_pembahasan')),
			'action'=>base_url('pembahasan/edit'),
			'button'=>'Edit'
		 ];

       $this->load->view($template, $data);
    }else{
        $data=[
            'kelas'=>$this->input->post('kelas',true),
            'soal'=>$this->input->post('soal',true),
            'id_mapel'=>$this->input->post('id_mapel',true),
            'pilihan_A'=>$this->input->post('pilihan_A',true),
            'pilihan_B'=>$this->input->post('pilihan_B',true),
            'pilihan_C'=>$this->input->post('pilihan_C',true),
            'jawaban'=>$this->input->post('jawaban',true),
            'pembahasan'=>$this->input->post('pembahasan',true),
            'gambar'=>$this->M_Pembahasan->uploadGambar() 
        ];

       $this->M_Pembahasan->edit($data);
       
       redirect('pembahasan');     
    }

 }

 public function hapus($id){
    $this->M_Pembahasan->hapus($id);
    redirect('pembahasan');

 }
}

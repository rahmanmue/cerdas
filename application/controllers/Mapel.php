<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	
	
	public function __construct()
    {
        parent::__construct();
        $this->load->Model('M_Mapel');
    }
	
	
	public function index(){
        $template = 'index';
		$listMapel = $this->M_Mapel->list();
		$data=[
		'title'=>'Mata Pelajaran',
		'listMapel'=> $listMapel,
		'content'=>'admin/list_mapel'
		];

        $this->load->view($template,$data);

    }

    public function tambah(){
        $template = 'index';

        $this->form_validation->set_rules('nama_mapel', 'Mata Pelajaran', 'required');
        

        if($this->form_validation->run()==FALSE){
        $data=[
            'title'=>'Tambah Mata Pelajaran',
            'content'=>'admin/form_mapel',
            'action'=>base_url('mapel/tambah'),
            'button'=>'Tambah'
        ];
        $this->load->view($template, $data);
        }else{
        $data=[
            'nama_mapel'=>$this->input->post('nama_mapel',true)
        ];

        $this->M_Mapel->tambah($data);
        
        redirect('mapel');  
        }

    }

    public function edit(){
        $template = 'index';

        $this->form_validation->set_rules('nama_mapel', 'Mata Pelajaran', 'required');



        if($this->form_validation->run()==FALSE){
            $data=[
                'title'=>'Edit Mata Pelajaran',
                'content'=>'admin/form_mapel',
                'mapel'=>$this->M_Mapel->detail($this->input->post('id_mapel')),
                'action'=>base_url('mapel/edit'),
                'button'=>'Edit'
            ];

        $this->load->view($template, $data);
        }else{
            $data=[
                'nama_mapel'=>$this->input->post('nama_mapel',true)
            ];

        $this->M_Mapel->edit($data);
        
        redirect('mapel');     
        }


    }

    public function hapus($id){
        $this->M_Mapel->hapus($id);
        redirect('mapel');
    }


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Soal extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function uploadGambar(){
    $config['upload_path']='./aset/gambar/';
    $config['allowed_types']='jpg|png|jpeg';
    $config['max_size']='1048';
    $this->load->library('upload',$config);
       if($this->upload->do_upload('gambar')){
          if($this->input->post('gambarLama') == ''){
             return $this->upload->data('file_name');  
          }else{
             unlink(FCPATH.'aset/gambar/'.$this->input->post('gambarLama'));
             return $this->upload->data('file_name');  
          }
       }else{
          return $this->input->post('gambarLama');
       }
 }

   public function getAll(){
      return $this->db->get('soal')->result();
   }

   public function countAll(){
      return $this->db->get('soal')->num_rows();
   }

   public function tambah($data){
      $this->db->insert('soal',$data);
   }

  

   public function detail($id){
      return $this->db->get_where('soal',['id_soal'=>$id])->row();
   }

   public function list(){
      return $this->db->get('soal')->result();
   }
   
   public function edit($data){
      $this->db->where('id_soal', $this->input->post('id_soal',true));
      $this->db->update('soal',$data);
   }
   
   public function hapus($id){
        $filename = $this->detail($id);
        if($filename->gambar == ''){
         $this->db->delete('soal',['id_soal'=>$id]);
        }else{
           unlink(FCPATH.'aset/gambar/'. $filename->gambar);
           $this->db->delete('soal',['id_soal'=>$id]);
        }
   }
}
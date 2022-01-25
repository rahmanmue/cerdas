<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pembahasan extends CI_Model{
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
      return $this->db->get('pembahasan')->result();
   }

   public function countAll(){
      return $this->db->get('pembahasan')->num_rows();
   }

   public function tambah($data){
      $this->db->insert('pembahasan',$data);
   }

  

   public function detail($id){
      return $this->db->get_where('pembahasan',['id_pembahasan'=>$id])->row();
   }

   public function list(){
      return $this->db->get('pembahasan')->result();
   }
   
   public function edit($data){
      $this->db->where('id_pembahasan', $this->input->post('id_pembahasan',true));
      $this->db->update('pembahasan',$data);
   }
   
   public function hapus($id){
        $filename = $this->detail($id);
        if($filename->gambar == ''){
            $this->db->delete('pembahasan',['id_pembahasan'=>$id]);
        }else{
            unlink(FCPATH.'aset/gambar/'. $filename->gambar);
            $this->db->delete('pembahasan',['id_pembahasan'=>$id]);
        }
   }
}
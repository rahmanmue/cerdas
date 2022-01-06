<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Video extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function getAll(){
      return $this->db->get('video')->result();
   }

   public function countAll(){
      return $this->db->get('video')->num_rows();
   }

   public function tambah($data){
      $this->db->insert('video',$data);
   }

  

   public function detail($id){
      return $this->db->get_where('video',['id_video'=>$id])->row();
   }

   public function list(){
      return $this->db->get('video')->result();
   }
   
   public function edit($data){
      $this->db->where('id_video', $this->input->post('id_video',true));
      $this->db->update('video',$data);
   }
   
   public function hapus($id){
      $this->db->delete('video',['id_video'=>$id]);
   }
}
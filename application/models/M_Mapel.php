<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mapel extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function getAll(){
      return $this->db->get('mata_pelajaran')->result();
   }

   public function countAll(){
      return $this->db->get('mata_pelajaran')->num_rows();
   }

   public function tambah($data){
      $this->db->insert('mata_pelajaran',$data);
   }

  

   public function detail($id){
      return $this->db->get_where('mata_pelajaran',['id_mapel'=>$id])->row();
   }

   public function list(){
      return $this->db->get('mata_pelajaran')->result();
   }
   
   public function edit($data){
      $this->db->where('id_mapel', $this->input->post('id_mapel',true));
      $this->db->update('mata_pelajaran',$data);
   }
   
   public function hapus($id){
      $this->db->delete('mata_pelajaran',['id_mapel'=>$id]);
   }
}
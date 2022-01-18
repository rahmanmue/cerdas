<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Materi extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function getAll(){
      return $this->db->select('*')
               ->order_by('tema ASC')
               ->order_by('subtema ASC')
               ->order_by('pembelajaran ASC')
               ->get('materi')->result();
   }

   public function countAll(){
      return $this->db->get('materi')->num_rows();
   }

   public function tambah($data){
      $this->db->insert('materi',$data);
   }

  

   public function detail($id){
      return $this->db->get_where('materi',['id_materi'=>$id])->row();
   }

   public function list(){
      return $this->db->get('materi')->result();
   }
   
   public function edit($data){
      $this->db->where('id_materi', $this->input->post('id_materi',true));
      $this->db->update('materi',$data);
   }
   
   public function hapus($id){
      $this->db->delete('materi',['id_materi'=>$id]);
   }
}
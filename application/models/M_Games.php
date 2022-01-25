<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Games extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }


   public function tambah($data){
      $this->db->insert('games',$data);
   }

   public function detail($id){
      return $this->db->get_where('games',['id'=>$id])->row();
   }

   public function list(){
      return $this->db->get('games')->result();
   }
   
   
   public function hapus($id){
      $this->db->delete('games',['id'=>$id]);
   }

}
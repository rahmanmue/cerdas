<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Siswa extends CI_Model{
   public function __construct()
   {
      parent:: __construct();
   }

   public function getListVideo($kelas){
      $this->db->select('*');
      $this->db->from('video');
      $this->db->join('materi', 'materi.id_materi = video.id_materi','left');
      $this->db->where('kelas',$kelas);
      $this->db->order_by('tema ASC');
      $this->db->order_by('subtema ASC');
      $this->db->order_by('pembelajaran ASC');
      $query = $this->db->get();
      return $query->result_array();
     

      // $query = $this->db->query("SELECT * FROM video INNER JOIN materi ON 'video.id_materi'= 'materi.id_materi' WHERE kelas = $kelas ORDER BY 'tema' ASC, 'subtema' ASC, 'pembelajaran' ASC;");
      // return $query->result_array();

      // SELECT * FROM `video` INNER JOIN `materi` ON video.id_materi = materi.id_materi WHERE video.kelas = 1 ORDER BY tema ASC, subtema ASC, pembelajaran ASC
   }

   public function getListMateri($kelas){
      $this->db->select('DISTINCT(soal.id_materi), materi.tema, materi.subtema, materi.pembelajaran');
      $this->db->from('soal');
      $this->db->join('materi', 'materi.id_materi = soal.id_materi','left');
      $this->db->where('kelas',$kelas);
      $this->db->order_by('tema ASC');
      $this->db->order_by('subtema ASC');
      $this->db->order_by('pembelajaran ASC');
      $query = $this->db->get();
      return $query->result();
     

      // $query = $this->db->query("SELECT * FROM video INNER JOIN materi ON 'video.id_materi'= 'materi.id_materi' WHERE kelas = $kelas ORDER BY 'tema' ASC, 'subtema' ASC, 'pembelajaran' ASC;");
      // return $query->result_array();

      // SELECT * FROM `video` INNER JOIN `materi` ON video.id_materi = materi.id_materi WHERE video.kelas = 1 ORDER BY tema ASC, subtema ASC, pembelajaran ASC
   }

   public function getListSoal($kelas){
      $this->db->select('*');
      $this->db->from('soal');
      $this->db->join('materi', 'materi.id_materi = soal.id_materi','left');
      $this->db->where('kelas',$kelas);
      $this->db->order_by('tema ASC');
      $this->db->order_by('subtema ASC');
      $this->db->order_by('pembelajaran ASC');
      $query = $this->db->get();
      return $query->result();
     
   }

   public function getListMapel($kelas){
      $this->db->select('DISTINCT(pembahasan.id_mapel), mata_pelajaran.nama_mapel');
      $this->db->from('pembahasan');
      $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mapel = pembahasan.id_mapel','left');
      $this->db->where('kelas',$kelas);
      $query = $this->db->get();
      return $query->result();
   }

   public function getListSoalPembahasan($kelas){
      $this->db->select('*');
      $this->db->from('pembahasan');
      $this->db->join('mata_pelajaran', 'mata_pelajaran.id_mapel = pembahasan.id_mapel','left');
      $this->db->where('kelas',$kelas);
      $query = $this->db->get();
      return $query->result();
     
   }

   public function getListPembahasan($kelas){
      return $this->db->select('*')
               ->order_by('tema ASC')
               ->order_by('subtema ASC')
               ->order_by('pembelajaran ASC')
               ->where('kelas',$kelas)
               ->get('pembahasan')->result_array();
   }


   // public function getListSoal($kelas){
   //    return $this->db->select('*')
   //             ->order_by('tema ASC')
   //             ->order_by('subtema ASC')
   //             ->order_by('pembelajaran ASC')
   //             ->where('kelas',$kelas)
   //             ->get('soal')->result();
   // }

   // public function getListGame($kelas){
   //    return $this->db->select('*')
   //             ->order_by('tema ASC')
   //             ->order_by('subtema ASC')
   //             ->order_by('pembelajaran ASC')
   //             ->where('kelas',$kelas)
   //             ->get('video')->result();
   // }


}
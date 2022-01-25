<?php

 if(!function_exists('login')){
    function login(){
      $ci=& get_instance();

      if(!$ci->session->userdata('user_id')){
         redirect(base_url('login'));
      }
    }
 }


 if (!function_exists('adaUserId')){
		
   function adaUserId(){
      $ci =& get_instance();
      $ci->load->Model('M_User');
      if($ci->session->userdata('user_id') != null){
         $status = $ci->M_User->detail($ci->session->userdata('user_id'))->status;
         if($status == 'siswa'){
            redirect('siswa');         
         }
      }else{
         return show_404();
      }
      
   }
}


?>
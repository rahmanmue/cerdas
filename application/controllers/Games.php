<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Games extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->Model(['M_Games']);
        adaUserId();
    }
	
	public function index(){
		$template = 'index';
		$listGames = $this->M_Games->list();
		$data=[
		'title'=>'Games',
		'listGames'=> $listGames,
		'content'=>'admin/list_games'
		];
        $this->load->view($template,$data);
	}

    
    public function hapus($id){
        $this->M_Games->hapus($id);
        redirect('games');
     }

}

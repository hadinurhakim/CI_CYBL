<?php

class PHP extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



      function __construct(){

            parent::__construct();

            $this->load->model('m_sub_menu');

      }

     
	public function index()
	{
		$m['title']= 'CYBL | PHP';
		$m['data']=$this->m_sub_menu->show_listMenu();

		$this->load->view('component/header_php',$m);
		$this->load->view('PHP',$m);
		$this->load->view('component/footer');
	}

	public function menu($id_menu){
		$m['title']= $id_menu;
		$m['data']=$this->m_sub_menu->show_listMenu();
		$m['dp']=$this->m_sub_menu->pagejoin($id_menu);

		$this->load->view('component/header_php',$m);
		$this->load->view($id_menu,$m);
		$this->load->view('component/footer');
	}


}

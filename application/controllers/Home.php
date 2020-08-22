<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Home extends CI_Controller
{

	 function __construct(){

            parent::__construct();

            $this->load->model('m_sub_menu_home');

      }
	

	public function index(){

			
		$data['title'] = 'CYBL | HOME';
		$data['user'] = $this->db->get_where('user_cybl', ['email' => $this->session->userdata('email')])->row_array();

		$data['data'] = $this->m_sub_menu_home->show_listMenu();
		$this->load->view('component/header',$data);
		$this->load->view('home',$data);
		$this->load->view('component/footer',$data);
	}
}
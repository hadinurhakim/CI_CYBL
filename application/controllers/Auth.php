<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class Auth extends CI_Controller
{
	
		public function __construct() 
		{
			parent::__construct();
			//unutk validasi form
			$this->load->library('form_validation');
			
		}

		public function index()
		{

			$data['user'] = $this->db->get_where('user_cybl', ['email' => $this->session->userdata('email')])->row_array();
			$data['title'] = 'CYB | Dashboard';

			$this->load->view('Admin/component/header',$data);
			$this->load->view('Admin/component/sidebar',$data);
			$this->load->view('Admin/index',$data);
			$this->load->view('Admin/component/footer');
		}

		public function login()
		{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == false ) {
					# code...
			$data['title'] = 'CYB | Login';


			$this->load->view('Admin/component/header',$data);
			$this->load->view('login');
			$this->load->view('Admin/component/footer');
				} else {
					$this->_login();
				}
		}

		private function _login() {
			//ambil nilai input dengan method post
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user_cybl', ['email' => $email])->row_array();
			
			if ($user) {
				// pengkondisian jika user aktive 1 = active
				if ($user['is_active'] == 1) {
					
					if (password_verify($password, $user['password'])) {
							
							$data = [
								'email' => $user['email'],
								'role_id' => $user['role_id']
							];

							$this->session->set_userdata($data);
							redirect('home');

					}else {
							
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
							password salah!
							</div>');
								redirect('auth/login');
							}	

					}else {
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
							email ini belum di aktivasi!
							</div>');

								redirect('auth/login');

	
						  }
					}else{
							$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
							email tidak salah!
							</div>');
								redirect('auth/login');

						}
		}

		public function register()
		{

			$this->form_validation->set_rules('name', 'Name', 'required|trim' );
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user_cybl.email]', [
					'is_unique' => 'email sudah terdaftar!'
					]);
			$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[5]|matches[password2]', [
				'matches' => 'password tidak sama!',
				'min_length' => 'password terlalu pendek!'
			]);
			$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]' );




			if ( $this->form_validation->run() == false) {
			
			$data['title'] = 'CYB | Register';

			$this->load->view('Admin/component/header',$data);
			$this->load->view('register');
			$this->load->view('Admin/component/footer');
			} else {
				$data = [
					'name' => htmlspecialchars($this->input->post('name', true)),
					'email' => htmlspecialchars($this->input->post('email', true)),
					'image' => 'default.jpg',
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'role_id' => 2,
					'is_active' => 1,
					'date_created' => time()
				];

				$this->db->insert('user_cybl',$data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Selamat, akun anda sudah terdaftar, silahkan login.
				</div>');
				redirect('auth/login');
			}
		}

		public function forgot()

		{
			$data['title'] = 'CYB | Forgot';
			$this->load->view('Admin/component/header',$data);
			$this->load->view('forgot-password');
			$this->load->view('Admin/component/footer');
		

		}

		public function logout(){
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('role_id');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Anda keluar!.
				</div>');

				redirect('auth/login');
		}
}
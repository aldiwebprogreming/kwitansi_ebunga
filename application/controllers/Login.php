<?php 

/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

		$this->load->library('form_validation');
	}


	function index(){


		$this->load->view('login');

	}



	function auth(){

		$this->form_validation->set_rules('username','Username','trim|required');

		$username = $this->input->post('username');
		$pass = $this->input->post('pass');

		 

		if($query == true){

			if (password_verify($pass, $query['pass'])) {
				
				$data =[

					'username' => $username
				];

				$this->session->set_data($data);
				$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Anda berhasil login',
					  imageUrl: 'http://localhost:8080/lending_admin/assets3/img/suksess.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

				redirect('kwitansi/');
			} else {

				$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal',
					  text: 'Password anda salah',
					  imageUrl: 'http://localhost:8080/lending_admin/assets3/img/suksess.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

				redirect('Login/');

			}

		} else{

				$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal',
					  text: 'Akun anda salah',
					  imageUrl: 'http://localhost:8080/lending_admin/assets3/img/suksess.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

				redirect('Login/');	
		}
	}
}

 ?>
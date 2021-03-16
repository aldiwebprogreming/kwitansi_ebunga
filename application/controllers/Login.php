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

		  $user = $this->input->post('username');
		 $pass = $this->input->post('pass');


		$query = $this->db->get_where('tbl_oprator', array('usernam' => $user ))->result_array();
		foreach ($query as $row) {
		}

			if ($query == true) {
				if (password_verify($pass, $row['pass']) AND $row['rule'] == "Super Admin") {
						
						$data = [

							'username' => $user,
							'rule' => 'Super Admin'
						];

					$this->session->set_userdata($data);
					$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Anda berhasil login',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/sukksess.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

				redirect('kwitansi/');
					
				} elseif(password_verify($pass, $row['pass']) AND $row['rule'] == "Admin") {

					$data = [

							'username' => $user,
							'rule' => 'Admin'
						];

						$this->session->set_userdata($data);
					$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Anda berhasil login',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/sukksess.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

					redirect('kwitansi/');
				} else {

					$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal!',
					  text: 'Password anda salah',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/pass2.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

					redirect('login/');

				}
			} else {

				$this->session->set_flashdata('message', "Swal.fire({
					  title: 'Gagal!',
					  text: 'Akun anda belum terdaftar',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/akun.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");

					redirect('login/');

			}
	}

	function logout(){

		$this->session->unset_userdata('username');
			 $this->session->set_flashdata('message', "Swal.fire({
					  title: 'Yess!',
					  text: 'Anda berhasil Keluar',
					  imageUrl: 'http://localhost:8080/kwitansi_ebunga/assets/logo/log2.svg',
					  imageWidth: 200,
					  imageHeight: 100,
					  imageAlt: 'Custom image',
					})");
			redirect('login/');
	}
}

 ?>
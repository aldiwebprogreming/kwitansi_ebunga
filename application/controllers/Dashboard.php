<?php 
	
	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			if ($this->session->userdata('username') == NULL) {
				redirect('login/');
			}
		}

		function index(){
			// all kwitansi
			$data['all'] = $this->db->get('tbl_kwitansi')->num_rows();
			// all kwitansi

			// kwitansi hari ini
			$id = $this->session->userdata('username');

	         $data['query'] = $this->db->get_where('tbl_oprator',array('usernam' => $id))->result_array();
	         $user = $this->db->get_where('tbl_oprator', array('usernam' => $id ))->result_array();
	         foreach ($user as $id_user) {}
	         $id_user1 = $id_user['id'];

			$tgl = date('d-m-Y');
			$data['kwitansiHariIni'] =  $this->db->query("SELECT * FROM tbl_kwitansi WHERE tgl_terbit = '$tgl' AND id_user = '$id_user1'")->num_rows();
			// kwitansi hari ini

			// jumlah kwitansi anda
			$user = $this->session->userdata('username');
			$idUser = $this->db->get_where('tbl_oprator',array('usernam' => $user))->result_array();
			foreach ($idUser as $detUser) {}
			$get = $detUser['id'];
			$data['kwitansiAnda'] = $this->db->get_where('tbl_kwitansi', array('id_user' => $get))->num_rows();
			// jumlah kwitansi anda

			$this->load->view('template/header');
			$this->load->view('dashboard',$data);
			$this->load->view('template/footer');
		}
	}

		
 ?>
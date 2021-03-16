<?php 

/**
 * 

 */
class Operator extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('username') == NULL) {
			redirect('login/');
			}
	}


	function data_operator(){


		$data['opr'] = $this->db->get('tbl_oprator')->result_array();

		$this->load->view('template/header');
		$this->load->view('data_operator', $data);
		$this->load->view('template/footer');
	}


	function tambah_operator(){

		$this->load->view('template/header');
		$this->load->view('tambah_operator');
		$this->load->view('template/footer');


		if ($this->input->post('kirim')) {
			
			$data = [

				'usernam' => $this->input->post('username'),
				'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
				'rule' => $this->input->post('rule')
			];

			$input = $this->db->insert('tbl_oprator', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil ditmbah", "success");');
				redirect('operator/data_operator/');
		}



	}

	function hapus(){

		$id = $this->input->get('id');
		$this->db->where('id', $id);
		$this->db->delete('tbl_oprator');
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil dihapus", "success");');
			redirect('operator/data_operator');
	}



}
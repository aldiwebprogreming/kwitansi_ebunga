<?php 

/**
 * 
 */
class Kwitansi extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}


	function index(){

		$tgl = date('d-m-Y');
		$data['kwitansi'] =  $this->db->query("SELECT * FROM tbl_kwitansi WHERE tgl_terbit = '$tgl' ORDER BY id DESC ")->result_array();
		$this->load->view('template/header');
		$this->load->view('kwitansi', $data);
		$this->load->view('template/footer');
	}

	function cetak(){

		function penyebut($nilai) {
			 $nilai = abs($nilai);
			 $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
			 $temp = "";
			 if ($nilai < 12) {
			 $temp = " ". $huruf[$nilai];
			 } else if ($nilai <20) {
			 $temp = penyebut($nilai - 10). " belas";
			 } else if ($nilai < 100) {
			 $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
			 } else if ($nilai < 200) {
			 $temp = " seratus" . penyebut($nilai - 100);
			 } else if ($nilai < 1000) {
			 $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
			 } else if ($nilai < 2000) {
			 $temp = " seribu" . penyebut($nilai - 1000);
			 } else if ($nilai < 1000000) {
			 $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
			 } else if ($nilai < 1000000000) {
			 $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
			 } else if ($nilai < 1000000000000) {
			 $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
			 } else if ($nilai < 1000000000000000) {
			 $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
			 }     
			 return $temp;
			 }
			 
			 function terbilang($nilai) {
			 if($nilai<0) {
			 $hasil = "minus ". trim(penyebut($nilai));
			 } else {
			 $hasil = trim(penyebut($nilai));
			 }     
			 return $hasil;
			 }
			 
			 
			 $angka = $this->input->post('nilai_pesanan');
			 $ter = terbilang($angka);




		$array_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
		$bln = $array_bln[date('n')];
	

		$no_kwitansi =  date('d/ ').$bln.date(' /Y');
		$tgl = date('d-m-Y');
		$pesanan = $this->input->post('pesanan');
		$nilai_pesanan = $this->input->post('nilai_pesanan');
		$untuk_pembayaran = $this->input->post('untuk_pembayaran');

		if ($this->input->post('kirim')) {

			
			
			$data = [
				'pesanan' => $pesanan,
				'nilai_pesanan' => $nilai_pesanan,
				'terbilang' =>ucwords($ter),
				'untuk_pembayaran' => $untuk_pembayaran,
				'no_kwitansi' => $no_kwitansi,
				'tgl_terbit' => $tgl

			];


			$input = $this->db->insert('tbl_kwitansi', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil ditmbah", "success");');
				redirect('kwitansi/');
		}


	
	}


	function cetak_kwitansi(){

		$this->load->library('dompdf_gen');

		$data['judul'] = "Kwitansi Ebunga";
		$data['footer'] = "belanja mudah dan murah hanya di ebunga";
 		$this->load->view('cetak_kwitansi/cetak',$data);

 		$paper_size ="A4";
 		$orientation = "landscape";
 		// $customPaper = array(0,0,360,360);
 		$html = $this->output->get_output();
 		$this->dompdf->set_paper($paper_size, $orientation);

 		$this->dompdf->load_html($html);
 		$this->dompdf->render();
 		$this->dompdf->stream("cetak_oprator.pdf", array('Attachment' => 0));
	}


	function edit(){

			$this->form_validation->set_rules('pesanan', "Telah terima dari","trim|required");
			$this->form_validation->set_rules('nilai_pesanan', "Harga pesanan", "trim|required");
			$this->form_validation->set_rules('no_kwitansi', "Nomor Kwitansi", "trim|required");
			// $this->form_validation->set_rules('tgl_terbit', "Tanggal Terbit", "trim|required");
			$this->form_validation->set_rules('untuk_pembayaran', "Untuk Pembayaran", "trim|required");


			if ($this->form_validation->run()== FALSE) {
				$id = $this->input->get('id');
		$data['edit'] = $this->db->get_where('tbl_kwitansi', array('id' => $id))->result_array();

		$this->load->view('template/header');
		$this->load->view('edit_kwitansi', $data);
		$this->load->view('template/footer');
			} else {


		if ($this->input->post('edit')) {
			
				$id = $this->input->get('id');

					$data = [

						'pesanan' => $this->input->post('pesanan'),
						'nilai_pesanan' => $this->input->post('nilai_pesanan'),
						'untuk_pembayaran' => $this->input->post('untuk_pembayaran'),
						'no_kwitansi'=> $this->input->post('no_kwitansi')
						// 'tgl_terbit' => $this->input->post('tgl_terbit')

					];

					$this->db->where('id', $id);
					$this->db->update('tbl_kwitansi', $data);
						$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil diubah", "success");');
						redirect('kwitansi/');


				}

				
			}

	

	}

	function hapus_kwitansi(){

		$id = $this->input->post('hapus');
		$this->db->where('id', $id);
		$this->db->delete('tbl_kwitansi');
		$this->session->set_flashdata('message', 'swal("Sukses!", "Data Berhasil di hapus", "success");');
		redirect('kwitansi/');
	}


	
}
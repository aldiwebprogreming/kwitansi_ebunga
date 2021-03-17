<?php 

	/**
	 * 
	 */
	class Dete extends CI_Controller
	{
		
		function __construct()
		{
			
		}

		function index(){

			$tgl_akhir_bulan=date('t');
				 $tgl_hari_ini=date('d');
				 if($tgl_akhir_bulan == $tgl_hari_ini){
				 echo "<a href='#'>backup</a>";
				 }else{
				 echo "backup";
				 }
		}
	}

 ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_kost');
		 // $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->m_kost->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
}
?>
 
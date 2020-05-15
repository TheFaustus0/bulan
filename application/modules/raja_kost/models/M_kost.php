<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kost extends CI_Model {

	function tampil()
	{
		return $this->db->get('t_kost')->result();
	}

}
 ?>
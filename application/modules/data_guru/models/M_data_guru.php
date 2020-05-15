<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_guru extends CI_Model {

	function tampil()
	{
		return $this->db->get('data_guru')->result();
	}

	function tambah(){
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$jur=$this->input->post('jurusan');

		$data = array('nis' =>$nis,'nama'=>$nama,'alamat'=>$alamat,'jurusan'=>$jur);

		$this->db->insert('data_guru',$data);
	}

	function hapus($id)
	{
		$this->db->where('id', $id)->delete('data_guru');
	}

	function edit()
	{
		$id = $this->input->post('id');
		
		$nama= $this->input->post('nama');
		$nis= $this->input->post('nis');
		$alamat=$this->input->post('alamat');
		$jur=$this->input->post('jurusan');

		$data = array('nis' => $nis,'nama'=>$nama,'alamat'=>$alamat,'jurusan'=>$jur);

		$this->db->where('id',$id)->update('data_guru', $data);
	}
}
?>
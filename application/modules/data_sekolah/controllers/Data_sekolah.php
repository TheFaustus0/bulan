<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_sekolah extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('m_data_sekolah');
    }

    // index
    public function index()
    {
        if ($this->session->userdata('login')) {
            $data = array(
                'namamodule' => "data_sekolah",
                'namafileview' => "V_data_sekolah",
                'tampil' => $this->m_data_sekolah->tampil(),
            );
            echo Modules::run('template/tampilCore', $data);

        } else {
            redirect('login');
        }

    }

    public function tambah()
    {
        $this->m_data_sekolah->tambah();
        redirect('data_sekolah');
    }

    public function edit()
    {
        $this->m_data_sekolah->edit();
        redirect('data_sekolah');
    }

    public function hapus($id)
    {
        $this->m_data_sekolah->hapus($id);
        redirect('data_sekolah');
    }

    public function cari()
    {
        $data = array(
            'namamodule' => "data_sekolah",
            'namafileview' => "V_data_sekolah",
            'tampil' => $this->m_data_sekolah->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }

}

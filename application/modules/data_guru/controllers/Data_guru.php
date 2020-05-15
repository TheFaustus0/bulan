<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_guru extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('m_data_guru');
    }

    // index
    public function index()
    {
        if ($this->session->userdata('login')) {
            $data = array(
                'namamodule' => "data_guru",
                'namafileview' => "V_data_guru",
                'tampil' => $this->m_data_guru->tampil(),
            );
            echo Modules::run('template/tampilCore', $data);

        } else {
            redirect('login');
        }
    }

    public function tambah_data()
    {
        $this->m_data_guru->tambah();
        redirect('data_guru');
    }

    public function hapus($id)
    {
        $this->m_data_guru->hapus($id);
        redirect('data_guru');
    }

    public function edit()
    {
        $this->m_data_guru->edit();
        redirect('data_guru');
    }
}

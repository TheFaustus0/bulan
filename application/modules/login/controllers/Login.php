<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        //get model

    }

    public function index()
    {
        $this->load->view('v_login');

    }
    public function auth()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $user = $this->input->post('username');
            $password = $this->input->post('password');

            $row = $this->db->get_where('tb_login', ['username' => $user])->row_array();

            if ($row['username']) {
                if ($row['password']) {

                    $data = [
                        'login' => true,
                        'username' => $row['username'],
                        'password' => $row['password'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('data_sekolah');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password </div>');
                redirect('login');

            }
        }

    }
}

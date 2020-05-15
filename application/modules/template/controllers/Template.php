<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model

        $this->load->model('m_template');

    }

    // view core templating
    public function index()
    {

        $this->load->view('view_template_core');
    }

    public function tampilCore($data)
    {
        $id = $this->session->userdata('session_id');

        $this->load->view('view_template_core', $data);
    }

}

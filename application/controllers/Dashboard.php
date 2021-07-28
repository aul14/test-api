<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }


    public function index()
    {
        $data['result'] = json_decode($this->curl->simple_get('https://api.samrs.cloud/Asset/Test'), true);
        $this->load->view('dashboard', $data);
    }
}

/* End of file Dashboard.php */

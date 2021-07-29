<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
    }

    public function listing()
    {
        return  json_decode($this->curl->simple_get('https://api.samrs.cloud/Asset/Test'), true);
    }
}

/* End of file M_dashboard.php */

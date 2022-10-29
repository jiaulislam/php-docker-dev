<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CIController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['payloads'] = (object) array(
            'name' => "Jiaul Islam",
            'mobileNo' => "01778625131",
        );
        $this->load->view('home_view', $data);
    }
}

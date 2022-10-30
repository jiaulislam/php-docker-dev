<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CIController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('util');
        $this->load->library('session');
        $this->load->library('AuthValidation', NULL, 'AV');
    }

    public function index()
    {
        if ($this->AV->isUserLoggedIn()) {
            $data['payloads'] = (object) array(
                'name' => 'Jiaul Islam Jibon',
            );
            // pp($this->session->currentUser);
            $this->load->view('home_view', $data);
        }else {
            redirect('/');
        }
    }
}

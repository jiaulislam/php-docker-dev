<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CIController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function _output($content)
    {
        // Load the base template with output content available as $content
        $data['content'] = &$content;
        echo($this->load->view('layout/base', $data, true));
    }

}
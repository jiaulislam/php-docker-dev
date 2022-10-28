<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CIController {

	public function index()
	{
		$this->load->view('home_view');
	}
}

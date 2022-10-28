<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CIController {

	public function index()
	{
		$data['payloads'] = (object) array(
			'name' => "Jiaul Islam",
			'mobileNo' => "01778625131"
		);
		$this->load->view('home_view', $data);
	}
}

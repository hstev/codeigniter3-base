<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('template/header');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
		$this->load->view('template/scripts');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class panel extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        // $this->load->model("Product_Model");
        // $this->load->helper('url');
        // $this->load->library('session');
        // $this->load->helper('common');
        // $this->load->library('email');
    }
public function index()
	{
		$this->load->view('mainpg');
	}
public function adminpanel()
	{
		$this->load->view('panelview');
	}

}
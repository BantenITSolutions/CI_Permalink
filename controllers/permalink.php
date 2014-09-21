<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permalink extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('permalink_model');
		$this->load->helper('permalink_helper');
	}

	function index()
	{
		$data["artikel"] = $this->permalink_model->semua_artikel();
		$this->load->view('permalink/home',$data);
	}

	function detail()
	{
		$kode='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$kode='';
		}
		else
		{
    			$kode = $this->uri->segment(3);
		}
		$p_kode = explode("-",$kode);
		$data["artikel"] = $this->permalink_model->detail_artikel($p_kode[0]);
		$this->load->view('permalink/detail',$data);
	}
}

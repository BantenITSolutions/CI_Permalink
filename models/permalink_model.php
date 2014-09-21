<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class permalink_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	function semua_artikel()
	{
		$q = $this->db->query("select * from tbl_content");
		return $q;
	}
	function detail_artikel($id)
	{
		$q = $this->db->query("select * from tbl_content where id_content='$id'");
		return $q;
	}
}
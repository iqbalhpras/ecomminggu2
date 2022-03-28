<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_account extends CI_Model{
	function daftar($data){
			$this->db->insert('users', $data);
	}
	function list_user(){	
		$q = $this->db->get('users');
		return $data = $q->result_array();
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
 function __construct(){
 parent::__construct();
 $this->simple_login->cek_login();
 $this->load->model('m_account'); //call model
 }
 //Load Halaman dashboard
 public function index() {
    $this->load->view('account/v_dashboard');
 }
 public function users(){
    $users = $this->m_account->list_user();
    $data = array('users' => $users);
    $this->load->view('account/v_user',$data);
 }
} 
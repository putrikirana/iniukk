<?php 
/**
 * 
 */
 class Admin extends CI_Controller
 
 {
  
  function __construct()
  
  {
    
    parent::__construct();
    $this->load->model('m_rute');
    $this->load->model('m_user');
    $this->load->model('m_customer');
    $this->load->model('m_transportation');

    $this->load->helper('url');
  }

  function index(){
  
  $this->load->view('v_admin');

  }

  /////// RUTE ///////

  public function rute(){
    $data['rute'] = $this->m_rute->tampil_data()->result();
    $this->load->view('v_rute',$data);

  }

 }
  ?>
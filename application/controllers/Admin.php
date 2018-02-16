<?php 
/**
 * 
 */
 class Admin extends CI_Controller
 
 {
  
  function __construct()
  
  {
    
    parent::__construct();
    $this->load->model('data_crud');
    $this->load->model('m_user');
    $this->load->model('m_customer');
    $this->load->helper('url');
  }

  function index(){
  
  $this->load->view('v_admin');

  }

  ////// RUTE //////
  function rute(){
    $data['rute'] = $this->data_crud->tampil_datarute()->result();
    $this->load->view('v_rute',$data);

  }

  function hapus_rute($id){
    $where = array('id' => $id);
      $this->data_crud->hapus_datarute($where,'rute');
      redirect('admin/rute');
  }

  function proses_tambah(){
      $id = $this->input->post('id');
      $depart = $this->input->post('depart');
      $rute_from = $this->input->post('rutefrom');
      $rute_to = $this->input->post('ruteto');
      $price = $this->input->post('price');
 

      $data = array(
      'id' => $id,
      'depart_at' => $depart,
      'rute_from' => $rute_from,
      'rute_to' => $rute_to,
      'price' => $price
      );

      $this->data_crud->input_datarute($data,'rute');
      redirect('admin/rute');
  }

  function edit_rute($id){
      $where = array('id' => $id);
      $data['rute'] = $this->data_crud->edit_datarute($where,'rute')->result();
      $this->load->view('v_rute_edit',$data);
  }

  function update_rute(){
    $id = $this->input->post('id');
    $depart = $this->input->post('depart');
    $rute_from = $this->input->post('rutefrom');
    $rute_to = $this->input->post('ruteto');
    $price = $this->input->post('price');  

    $data = array(
        'depart_at' => $depart,
        'rute_from' => $rute_from,
        'rute_to' => $rute_to,
        'price' => $price
    );

    $where = array(
        'id' => $id
    );

    $this->data_crud->update_datarute($where,$data,'rute');
    redirect('admin/rute');
  }

  ////// USER //////
  function user(){
    $data['user'] = $this->m_user->tampil_datauser()->result();
    $this->load->view('v_user',$data);

  }

  function hapus_user($id){
    $where = array('id' => $id);
      $this->m_user->hapus_datauser($where,'user');
      redirect('admin/user');
  }

  function proses_tambah_user(){
      $id = $this->input->post('id');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $fullname = $this->input->post('fullname');
      $level = $this->input->post('level');
 

      $data = array(
      'id' => $id,
      'username' => $username,
      'password' => $password,
      'fullname' => $fullname,
      'level' => $level
      );

      $this->m_user->input_datauser($data,'user');
      redirect('admin/user');
  }

  function edit_datauser($id){
      $where = array('id' => $id);
      $data['user'] = $this->m_user->edit_datarute($where,'user')->result();
      $this->load->view('v_user_edit',$data);
  }

  function update_datauser(){
    $id = $this->input->post('id');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $fullname = $this->input->post('fullname');
    $level = $this->input->post('level');  

    $data = array(
        'username' => $username,
        'password' => $password,
        'fullname' => $fullname,
        'level' => $level
    );

    $where = array(
        'id' => $id
    );

    $this->m_user->update_datauser($where,$data,'user');
    redirect('admin/user');
  }

  ////// customer //////
  function customer(){
    $data['customer'] = $this->m_customer->tampil_datacustomer()->result();
    $this->load->view('v_customer',$data);

  }

  function hapus_customer($id){
    $where = array('id' => $id);
      $this->m_customer->hapus_datacustomer($where,'customer');
      redirect('admin/customer');
  }

  function proses_tambah_customer(){
      $id = $this->input->post('id');
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $address = $this->input->post('address');
      $phone = $this->input->post('phone');
 

      $data = array(
      'id' => $id,
      'name' => $name,
      'email' => $email,
      'address' => $address,
      'phone' => $phone
      );

      $this->m_customer->input_datacustomer($data,'customer');
      redirect('admin/customer');
  }

  function edit_customer($id){
      $where = array('id' => $id);
      $data['customer'] = $this->m_customer->edit_datacustomer($where,'customer')->result();
      $this->load->view('v_customer_edit',$data);
  }

  function update_customer(){
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $address = $this->input->post('address');
    $phone = $this->input->post('phone');  

    $data = array(
        'name' => $name,
        'email' => $email,
        'address' => $address,
        'phone' => $phone
    );

    $where = array(
        'id' => $id
    );

    $this->m_customer->update_datacustomer($where,$data,'customer');
    redirect('admin/customer');
  }
 }
  ?>
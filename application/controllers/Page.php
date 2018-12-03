<?php
class Page extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE)
    {
      redirect('login');
    }
  }

  function index()
  {
    //Allowing akses to admin only
    if($this->session->userdata('role')==='admin')
    {
      $this->load->view('dashboard_view');
    }else{
      echo "Access Denied";
    }

  }

  function operator()
  {
    //Allowing akses to staff only
    if($this->session->userdata('role')==='operator')
    {
      $this->load->view('dashboard_view');
    }else
    {
      echo "Access Denied";
    }
  }

  /***function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='3'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }***/

}

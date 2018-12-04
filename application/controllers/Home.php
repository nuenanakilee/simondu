<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('auth');			
		$this->load->helper('url');			
		$this->load->database();
	}	
	
	
	public function index(){
		if($this->auth->get_permission($this->session->userdata('ROLE_NAME'), __CLASS__ , __FUNCTION__ ) == false){
			redirect ('authentication/unauthorized');
		}	
		
		echo 'Bisa diakses login dan tidak login<br>';
		
		if($this->session->userdata('is_logged_in') == 1){
			echo 'Role : '.$this->session->userdata('ROLE_NAME').'<br>';
			echo 'Kanwil/KPPN : '.$this->session->userdata('KPPN').'<br>';
			echo '<a href="'. base_url() .'authentication/logout">Logout</a><br>';
		}else{
			echo 'Role : Hello Gaes<br>';
			echo '<a href="'. base_url() .'authentication/">Login</a><br>';
		}
		var_dump($this->session);
	}
	
	public function bisa_diakses_admin_doang(){
		if($this->auth->get_permission($this->session->userdata('ROLE_NAME'), __CLASS__ , __FUNCTION__ ) == false){
			redirect ('authentication/unauthorized');
		}		
		echo 'halo admin';
	}
	
	public function bisa_diakses_operator_doang(){
		if($this->auth->get_permission($this->session->userdata('ROLE_NAME'), __CLASS__ , __FUNCTION__ ) == false){
			redirect ('authentication/unauthorized');
		}	
		echo 'Halo operator';
	}
	
	public function bisa_diakses_tanpa_login(){	
		echo 'Hello saya bisa diakses oleh semuanya walaupun tanpa login';
	}
}

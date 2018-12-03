<?php
class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }


    function index()
    {
        $this->load->view('login_view');
    }


    function auth()
    {
    $username    = $this->input->post('username',TRUE);
    $password    = md5($this->input->post('password',TRUE));
    $validate    = $this->LoginModel->validate($username,$password);
        if($validate->num_rows() > 0)
        {
            $data  = $validate->row_array();
            $name  = $data['nmkppn'];
            $user = $data['nmuser'];
            $role = $data['role'];
            $sesdata = array(
                'nmkppn'  => $name,
                'nmuser'     => $user,
                'role'     => $role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($role === 'admin'){
                redirect('page');

            // access login for operator
            }elseif($level === 'operator'){
                redirect('page/operator');

            // access login jika salah

            }else{
                echo $this->session->set_flashdata('msg','Username atau Password Salah');
                redirect('welcome');
            }
        }
    }


    function logout()
    {
      $this->session->sess_destroy();
      redirect('welcome');
    }

}
?>
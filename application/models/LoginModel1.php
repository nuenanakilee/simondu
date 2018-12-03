<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem !! ');
//membuat suatu class
class LoginModel extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    function cek_login($table,$where)
    {		
		return $this->db->get_where($table,$where);

	}

	

}
?>
<?php
class LoginModel extends CI_Model{
 
  function validate($username,$password)
  {
    $this->db->where('nmuser',$username);
    $this->db->where('psswrd',$password);
    $result = $this->db->get('t_user',1);
    return $result;
  }
 
}
 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class register extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  public function signup(){
    $email=$this->input->post('email');
    $pass=md5($this->input->post('pass'));
    //  $rpass=md5($this->input->post('password'));
    $sql = "INSERT INTO `user`( `uemail`, `upass`, `type`) VALUES ('$email','$pass','0')";
    $res = $this->db->query($sql);
    //echo "signup";
  }
  public function login(){
    $email=$this->input->post('email');
    $pass=$this->input->post('pass');
    $sql = "select * from user where uemail='$email' AND upass='$pass'";
    $res = $this->db->query($sql);
    if ($res->num_rows() == 1) {
      //echo "welcome $email";
      /*$res=$res->row();
      $data=array('uemail' => $res->uemail,'uname'=>$res->uname,'utype'=>$res->utype,'loggedin' => 1,'umob' =>$res->umob);
      $this->session->set_userdata($data);
      */
      return TRUE;
    }
    else return FALSE;
  }
}

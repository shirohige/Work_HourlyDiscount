<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class register extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  public function signup($email,$pass){
    //$email=$this->input->post('email');
    //$pass=md5($this->input->post('pass'));
    //  $rpass=md5($this->input->post('password'));
    $sql = "INSERT INTO `user`( `uemail`, `upass`, `type`) VALUES ('$email','$pass','0')";
    $res = $this->db->query($sql);
    $this->login($email,$pass);
    //echo "signup";
  }
  public function login($email,$pass){
    //$email=$this->input->post('email');
    //$pass=$this->input->post('pass');
    $sql = "select * from user where uemail='$email' AND upass='$pass'";
    $res = $this->db->query($sql);
    if ($res->num_rows() == 1) {
      $this->initSession($res->row_array());
      //echo "welcome $email";
      /*$res=$res->row();
      $data=array('uemail' => $res->uemail,'uname'=>$res->uname,'utype'=>$res->utype,'loggedin' => 1,'umob' =>$res->umob);
      $this->session->set_userdata($data);
      */
      return TRUE;
    }
    else return FALSE;
  }
  private function initSession($res){
    //Initialize session Variables
    $this->session->loggedin=1;
    $this->session->set_userdata($res);
    if($res['type'] == 'o'){
      //load Owner Details
    }
  }
}

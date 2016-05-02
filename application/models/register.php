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
    $sql = "INSERT INTO `user`( `uemail`, `upass`, `type`) VALUES ('$email','$pass','c')";
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
    if($res['type'] == 'b' || $res['type'] == 'p'){
      $sql = "select * from stores where uid ='".$this->session->uid."'";
      $res = $this->db->query($sql);
      $this->session->set_userdata($res->row_array());
      //load Owner Details
    }
  }
  private function upload($name,$path,$src){
    $config['upload_path']          = './images/'.$path.'/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 20000;
    $config['max_width']            = 0;
    $config['max_height']           = 0;
    $config['overwrite']            = TRUE;
    $config['file_name']            = $name.".jpg";
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if(!$this->upload->do_upload($src)){
      echo $this->upload->display_errors();
    }else{
      //echo "file Uploaded";
    }
  }
  public function createcoupon($disc,$desc,$cat,$subcat,$hfrom,$mfrom,$hto,$mto,$days){
    $cid=$this->session->cid;
    $sql = "INSERT INTO `coupon`(`cid`, `coupon_desc`, `discount`, `th_from`, `tm_from`, `th_to`, `tm_to`, `cat`, `subcat`, `weekdays`) VALUES ('$cid','$desc','$disc','$hfrom','$mfrom','$hto','$mto','$cat','$subcat','$days')";
    $this->db->query($sql);
    $id = $this->db->insert_id();
    $this->upload($id,"logos","coupon-logo");
  }
  public function completeAccount($fname,$lname,$cname,$cemail,$pno,$lat,$lng,$addr){
    $uid=$this->session->uid;
    $sql = "UPDATE `user` SET `type`='p' WHERE uid='$uid'";
    $this->db->query($sql);
    $sql = "INSERT INTO `stores`(`uid`, `o_fname`, `o_lname`, `cemail`, `lng`, `lat`, `cname`, `addr`) VALUES ('$uid','$fname','$lname','$cemail','$lng','$lat','$cname','$addr')";
    $this->db->query($sql);
    $id = $this->db->insert_id();
    $this->upload($id,"profile","profile");
    $sql = "Select * from user where uid='$uid'";
    $res = $this->db->query($sql);
    $this->initSession($res->row_array());
  }
  public function genCoupon($lat,$lng,$thfrom,$tmfrom,$thto,$tmto,$time){
    $sql = "Select * from (SELECT coupon.*,stores.addr,sqrt(POWER(stores.lng-($lng),2) + POWER(stores.lat-($lat),2)) AS Distance,stores.lat,stores.lng,CASE
            WHEN (`th_from` > `th_to`) THEN CASE
            WHEN (`th_from` < $thfrom) AND ($thfrom < (`th_to`)+24) THEN '1'
            WHEN (`th_from` < $thfrom) AND ($thfrom = (`th_to`)+24) AND (01 < `tm_to`) THEN '1'
            WHEN (`th_from` > $thfrom) AND (($thfrom+24) < `th_to`) THEN '1'
            ELSE '0' END
            WHEN (`th_from` < `th_to`) THEN CASE
            WHEN (`th_from`> $thfrom) OR (`th_from` =$thfrom AND `tm_from`>$tmfrom) THEN '0'
            WHEN (`th_to` < $thto) OR (`th_to` = $thto AND `tm_to` < $tmto) THEN '0'
            ELSE '1' END
            ELSE '0' END AS STATUSCode
            FROM `coupon` INNER JOIN stores ON coupon.cid=stores.cid) AS Detail where STATUSCode=1 ORDER BY Distance ASC";
    //echo $sql;
    $res = $this->db->query($sql);
    if($res->num_rows() == 0) echo "Sorry No coupons Available at the moment,Please come again later";
    foreach($res->result_array() as $data) {
      $this->load->view('coupon_structure',array_merge($data,array('time' =>$time)));
    }
  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function createcoupon(){
		$this->load->model('register');
		$this->load->model('Timezone');
		$tz=$this->Timezone->get_time_zone($this->input->post('country'),$this->input->post('zone'));
		//$from=$this->input->post('time_from');
		//$to=$this->input->post('time_to');
		$date_from = new DateTime($this->input->post('time_from').':00:00', new DateTimeZone($tz));
		$date_from->setTimezone(new DateTimeZone('UTC'));
		$date_to = new DateTime($this->input->post('time_to').':00:00', new DateTimeZone($tz));
		$date_to->setTimezone(new DateTimeZone('UTC'));
		/*$th_from=$date_from->format('H');
		$tm_from=$date_from->format('m');
		$th_to=$date_to->format('H');
		$tm_to=$date_to->format('m');*/
		$this->register->createcoupon(
		$this->input->post('discount'),
		$this->input->post('coupon_description'),
		$this->input->post('cat'),
		$this->input->post('sub-cat'),
		$date_from->format('H'),
		$date_from->format('i'),
		$date_to->format('H'),
		$date_to->format('i'),
		$this->input->post('days')
	);
	}
	public function index(){
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$data['coupon']=$this->load->view('coupon_structure','',TRUE);
		$this->load->view('homepage',$data);
	}
	public function about(){
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$this->load->view('about',$data);
	}
	public function editcoupon(){
		if(isset($this->session->loggedin) && $this->session->type=='b'){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('edit-coupons',$data);
		}
		else if(isset($this->session->loggedin) && $this->session->type=='c') $this->editaccount();
		else $this->signup();
	}
	public function editaccount(){
		if(isset($this->session->loggedin) && ($this->session->type=='c' || $this->session->type == 'b')){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('edit-account',$data);
		}
		else if(isset($this->session->loggedin) && $this->session->type=='p'){
			$this->reqpending();
		}
		else $this->login();
	}
	public function reqpending(){
		if(isset($this->session->loggedin) && $this->session->type=='c'){
			//$uid=$this->session->uid;
			//$sql = "UPDATE `user` SET `type`='p' WHERE uid='$uid'";
			$this->load->model('register');
			$this->register->completeAccount(
			$this->input->post('fname'),
			$this->input->post('lname'),
			$this->input->post('cname'),
			$this->input->post('cemail'),
			$this->input->post('pno'),
			$this->input->post('lat'),
			$this->input->post('lng'),
			$this->input->post('addr'));
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('request-pending',$data);
		}
		else if(isset($this->session->loggedin) && $this->session->type=='p'){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('request-pending',$data);
		}
	}
	public function addcoupon(){
		if(isset($this->session->loggedin) && $this->session->type=='b'){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('add-coupon',$data);
		}
		else if(isset($this->session->loggedin) && ($this->session->type=='c' || $this->session->type=='p')) $this->editaccount();
		else $this->signup();
	}
	public function coupons(){
		if(isset($this->session->loggedin) && $this->session->type=='b'){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$data['coupon']=$this->load->view('coupon_structure','',TRUE);
			$this->load->view('coupons',$data);
		}
		else if(isset($this->session->loggedin) && $this->session->type=='c') $this->editaccount();
		else $this->signup();
	}
	public function signup(){
		if(!isset($this->session->loggedin)){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('sign-up',$data);
		}else $this->index();
	}
	public function redeemedcoupons(){
		if(isset($this->session->loggedin)){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$data['coupon']=$this->load->view('coupon_structure','',TRUE);
			$this->load->view('redeemedcoupons',$data);
		}
	}
	public function register(){
		//$email=$this->input->post('email');
		//$pass=md5($this->input->post('pass'));
		$this->load->model('register');
		$this->register->signup($this->input->post('email'),md5($this->input->post('pass')));
		$this->index();
	}
	public function login(){
		$email=$this->input->post('email');
		$pass=md5($this->input->post('pass'));
		$this->load->model('register');
		$this->register->login($email,$pass);
		$this->index();
	}
	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}
	public function couponFactory($lng,$lat,$region,$code=null){
		$this->load->model('Timezone');
		$tz=$this->Timezone->get_time_zone($region,$code);
	}
}

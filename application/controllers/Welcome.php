<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
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
		if(isset($this->session->loggedin) && $this->session->type=='o'){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('edit-coupon',$data);
		}
		else if(isset($this->session->loggedin) && $this->session->type=='c') $this->editaccount();
		else $this->signup();
	}
	public function editaccount(){
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$this->load->view('edit-account',$data);
	}
	public function reqpending(){
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$this->load->view('request-pending',$data);
	}
	public function addcoupon(){
		if(isset($this->session->loggedin) && $this->session->type=='o'){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$this->load->view('add-coupon',$data);
		}
		else if(isset($this->session->loggedin) && $this->session->type=='c') $this->editaccount();
		else $this->signup();
	}
	public function coupons(){
		if(isset($this->session->loggedin) && $this->session->type=='o'){
			$data['navbar']=$this->load->view('navbar','',TRUE);
			$data['coupon']=$this->load->view('coupon_structure','',TRUE);
			$this->load->view('coupons',$data);
		}
		else if(isset($this->session->loggedin) && $this->session->type=='c') $this->editaccount();
		else $this->signup();
	}
	public function signup(){
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$this->load->view('sign-up',$data);
	}
	public function redeemedcoupons(){
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$data['coupon']=$this->load->view('coupon_structure','',TRUE);
		$this->load->view('redeemedcoupons',$data);
	}
	public function register(){
		$email=$this->input->post('email');
		$pass=md5($this->input->post('pass'));
		$this->load->model('register');
		$this->register->signup($email,$pass);
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
	public function couponFactory($lng,$lat,$region,$code){
		//echo $lng."/".$lat."/".$region."/".$code;
		//echo md5("asdf");
	}
}

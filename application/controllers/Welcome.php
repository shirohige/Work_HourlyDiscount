<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$this->load->view('edit-coupon',$data);
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
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$this->load->view('add-coupon',$data);
	}
	public function coupons(){
		$data['navbar']=$this->load->view('navbar','',TRUE);
		$data['coupon']=$this->load->view('coupon_structure','',TRUE);
		$this->load->view('coupons',$data);
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
		index();
	}
	public function login(){
		$email=$this->input->post('email');
		$pass=md5($this->input->post('pass'));
		$this->load->model('register');
		$this->register->login($email,$pass);
		index();
	}
	public function couponFactory($lng,$lat,$region,$code){
		echo $lng."/".$lat."/".$region."/".$code;
	}
	public function test($country,$region){
		$this->load->model('Timezone');
		echo $this->Timezone->get_time_zone($country,$region);
	}
}

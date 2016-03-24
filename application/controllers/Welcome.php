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
		$this->load->view('homepage',$data);
	}
	public function about(){
		$this->load->view('about');
	}
	public function editcoup(){
		$this->load->view('edit-coupon');
	}
	public function editacc(){
		$this->load->view('edit-account');
	}
	public function reqp(){
		$this->load->view('request-pending');
	}
	public function addcoup(){
		$this->load->view('add-coupon');
	}
	public function coup(){
		$this->load->view('coupons');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller { 
    function __construct(){
		parent::__construct();		
    }

  
    public function loadView($url){
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar_menu');
		$this->load->view($url);
		$this->load->view('template/footer');
	}





}
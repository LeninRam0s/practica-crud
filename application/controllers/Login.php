<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    //constructor
    public function __construct(){
        parent::__construct();
        //cargar helper
        $this->load->helper(array('getmenu'));   
    }
    
    //Cargar Login
    public function index(){
        $data['menu'] = main_menu(); //pasar los helper
        $this->load->view('login',$data);
    }
}
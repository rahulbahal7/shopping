<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Controller {

 function __construct()
 {
   parent::__construct();
 }

 public function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('login_view');
   
 }

}

?>


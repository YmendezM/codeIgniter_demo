<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        function __construct(){
            parent::__construct();
            $this->load->helpers('user');
        }
        function index(){
            $this->load->view('user/bienvenido');
        }
        function holamundo(){
            $this->load->view('user/bienvenido');
        }
}
?>
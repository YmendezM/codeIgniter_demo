<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
        function __construct(){
            parent::__construct();
            $this->load->helpers('user');
        }
        function index(){
            $this->load->library('Menu',array('Inicio','Contacto','Documentacion'));
            $data['mi_menu'] = $this->menu->construirMenu();
            $this->load->view('user/bienvenido',$data);
        }
        function holamundo(){
            $this->load->view('user/bienvenido');
        }
}
?>
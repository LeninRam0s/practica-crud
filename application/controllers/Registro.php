<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    //constructor
    public function __construct(){
        parent::__construct();
        //cargar helper
        $this->load->helper(array('getmenu'));
        $this->load->model('Users');
        //Cargar BD
        // $this->load->database();
         //$query = $this->db->get('user');
         //var_dump($query->result()); //muestra resultados
         
    }
    //CARGAR LA VISTA
    public function index(){
        $data['menu'] = main_menu(); //pasar los helper
        $this->load->view('registro',$data);
    }   

    //CREAR NUEVO USER
    public function create(){
       // echo "DATOS DEL REGISTRO OBTENIDOS DE LA VISTA> ";
       $username = $this->input->post('username');
       $email =  $this->input->post('email');
       $password =  $this->input->post('password');
       $password_c = $this->input->post('passwor_confirm');
       
       //VALIDACION  
        $config = array(
                array(
                        'field' => 'username',
                        'label' => 'Nombre de Usuario',
                        'rules' => 'required|alpha_numeric',
                ),
                array(
                        'field' => 'email',
                        'label' => 'Correo',
                        'rules' => 'required|valid_email',
                        'errors' => array(
                                'required' => 'El %s invalido',
                        ),
                    ),
            );
       $this->form_validation->set_rules($config);

//correr las reglas

if ($this->form_validation->run() == FALSE){
    $data['menu'] = main_menu();
    $this->load->view('registro', $data);
}else
{
$datos = array(
'nombre_usuario' => $username,
'correo' => $email,
'contrasena' => $password,
);
$data['menu'] = main_menu();
if(!$this->Users->create($datos)){
$data['msg'] = 'Ocurrio un error al ingresar datos, intente nuevamente';
$this->load->view('registro', $data);
}
$data['msg'] = 'Registrado correctamente!';
$this->load->view('registro', $data);

//var_dump($username, $email, $password, $password_c); //muestra los datos
}
//FIN VALIDADCION
}
}
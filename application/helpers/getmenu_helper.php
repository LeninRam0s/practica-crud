<?php
//los helper se utilizan para la reutilizacion de codigo

function main_menu(){
    return array(
        array(
            'title' => 'Login',
            'url' => base_url(),  
        ),
        array(
            'title' => 'Registro',
            'url' => base_url('index.php/registro'),           
        ),  
    );
}
?>
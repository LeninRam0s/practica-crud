<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {

 public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'user' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'status' => array(
                                'type' => 'TINYINT',
                                'constraint' => '1',
                                'null' => TRUE,
                        ),
                        'range' => array(
                                'type' => 'TINYINT',
                                'constraint' => '1',
                                'null' => TRUE
                        )
                ));
                $this->dbforge->add_key('id', TRUE); //Especificar Llave Primaria id
                $this->dbforge->create_table('user'); //Nombre de la tabla user
        
        }
        public function down()
        {
                $this->dbforge->drop_table('user'); //Metodo inverso a crear, es decir eliminara la tabla
        }
        
        
        
}
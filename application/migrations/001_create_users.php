<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_user' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE
        ),
            'name' => array(
            'type' => 'VARCHAR',
            'constraint' => '128',
        ),
            'password' => array(
            'type' => 'VARCHAR',
            'constraint' => '128',
        ),
            'email' => array(
            'type' => 'VARCHAR',
            'constraint' => '128'
        ),
        ));
        $this->dbforge->add_key('id_user', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
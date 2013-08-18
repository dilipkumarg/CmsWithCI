<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Dilip Kumar
 * Date: 18/8/13
 * Time: 7:12 PM
 * To change this template use File | Settings | File Templates.
 */
class Migration_Parent_id_to_pages extends CI_Migration {
    public function up() {
        $fields = (array(
            'parent_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'default' => 0
            ),
        ));
        $this->dbforge->add_column('pages', $fields);
    }

    public function down() {
        $this->dbforge->drop_column('pages', 'parent_id');
    }
}
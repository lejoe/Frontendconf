<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addattendees extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('attendees', array(
             'id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'email' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 255,
             ),
             'entrytime' => 
             array(
              'type' => 'timestamp',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0000-00-00 00:00:00',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('attendees');
    }
}
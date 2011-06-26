<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('News', 'doctrine');

/**
 * BaseNews
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property date $date
 * @property string $title
 * @property string $news
 * 
 * @method integer getId()    Returns the current record's "id" value
 * @method date    getDate()  Returns the current record's "date" value
 * @method string  getTitle() Returns the current record's "title" value
 * @method string  getNews()  Returns the current record's "news" value
 * @method News    setId()    Sets the current record's "id" value
 * @method News    setDate()  Sets the current record's "date" value
 * @method News    setTitle() Sets the current record's "title" value
 * @method News    setNews()  Sets the current record's "news" value
 * 
 * @package    frontendconference
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNews extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('news');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('news', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
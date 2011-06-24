<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Sponsors', 'doctrine');

/**
 * BaseSponsors
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $sponsor
 * @property string $website
 * @property integer $package
 * 
 * @method integer  getId()      Returns the current record's "id" value
 * @method string   getSponsor() Returns the current record's "sponsor" value
 * @method string   getWebsite() Returns the current record's "website" value
 * @method integer  getPackage() Returns the current record's "package" value
 * @method Sponsors setId()      Sets the current record's "id" value
 * @method Sponsors setSponsor() Sets the current record's "sponsor" value
 * @method Sponsors setWebsite() Sets the current record's "website" value
 * @method Sponsors setPackage() Sets the current record's "package" value
 * 
 * @package    frontendconference
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSponsors extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sponsors');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('sponsor', 'string', 32, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 32,
             ));
        $this->hasColumn('website', 'string', 128, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 128,
             ));
        $this->hasColumn('package', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
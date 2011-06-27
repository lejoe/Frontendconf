<?php

/**
 * Speakers
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    frontendconference
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Speakers extends BaseSpeakers
{
  public function setUp()
  {
      parent::setUp();
      $this->hasMany('Talks', array(
              'local' => 'id',
              'foreign' => 'fk_speakers'
          )
      );
      
  }
}

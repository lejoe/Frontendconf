<?php

/**
 * Speakers filter form base class.
 *
 * @package    frontendconference
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpeakersFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'profession'   => new sfWidgetFormFilterInput(),
      'bio'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'company'      => new sfWidgetFormFilterInput(),
      'twitter'      => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'website'      => new sfWidgetFormFilterInput(),
      'img'          => new sfWidgetFormFilterInput(),
      'costscovered' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'profession'   => new sfValidatorPass(array('required' => false)),
      'bio'          => new sfValidatorPass(array('required' => false)),
      'company'      => new sfValidatorPass(array('required' => false)),
      'twitter'      => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'website'      => new sfValidatorPass(array('required' => false)),
      'img'          => new sfValidatorPass(array('required' => false)),
      'costscovered' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('speakers_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Speakers';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'profession'   => 'Text',
      'bio'          => 'Text',
      'company'      => 'Text',
      'twitter'      => 'Text',
      'email'        => 'Text',
      'website'      => 'Text',
      'img'          => 'Text',
      'costscovered' => 'Text',
    );
  }
}

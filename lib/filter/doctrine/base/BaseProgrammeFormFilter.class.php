<?php

/**
 * Programme filter form base class.
 *
 * @package    frontendconference
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProgrammeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fk_talks'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'room'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'day'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'timestart' => new sfWidgetFormFilterInput(),
      'timeend'   => new sfWidgetFormFilterInput(),
      'type'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fk_talks'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'room'      => new sfValidatorPass(array('required' => false)),
      'day'       => new sfValidatorPass(array('required' => false)),
      'timestart' => new sfValidatorPass(array('required' => false)),
      'timeend'   => new sfValidatorPass(array('required' => false)),
      'type'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programme_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Programme';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'fk_talks'  => 'Number',
      'room'      => 'Text',
      'day'       => 'Text',
      'timestart' => 'Text',
      'timeend'   => 'Text',
      'type'      => 'Text',
    );
  }
}

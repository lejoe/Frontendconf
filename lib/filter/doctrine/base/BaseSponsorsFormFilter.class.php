<?php

/**
 * Sponsors filter form base class.
 *
 * @package    frontendconference
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSponsorsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sponsor' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'website' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'package' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'sponsor' => new sfValidatorPass(array('required' => false)),
      'website' => new sfValidatorPass(array('required' => false)),
      'package' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sponsors_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sponsors';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'sponsor' => 'Text',
      'website' => 'Text',
      'package' => 'Number',
    );
  }
}

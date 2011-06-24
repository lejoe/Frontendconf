<?php

/**
 * Programme form base class.
 *
 * @method Programme getObject() Returns the current form's model object
 *
 * @package    frontendconference
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProgrammeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'fk_talks'  => new sfWidgetFormInputText(),
      'room'      => new sfWidgetFormInputText(),
      'date'      => new sfWidgetFormDate(),
      'timestart' => new sfWidgetFormInputText(),
      'timeend'   => new sfWidgetFormTime(),
      'type'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fk_talks'  => new sfValidatorInteger(),
      'room'      => new sfValidatorString(array('max_length' => 32)),
      'date'      => new sfValidatorDate(),
      'timestart' => new sfValidatorInteger(),
      'timeend'   => new sfValidatorTime(),
      'type'      => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('programme[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Programme';
  }

}

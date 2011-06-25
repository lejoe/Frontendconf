<?php

/**
 * Speakers form base class.
 *
 * @method Speakers getObject() Returns the current form's model object
 *
 * @package    frontendconference
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpeakersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'profession'   => new sfWidgetFormInputText(),
      'bio'          => new sfWidgetFormTextarea(),
      'company'      => new sfWidgetFormInputText(),
      'twitter'      => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'website'      => new sfWidgetFormInputText(),
      'img'          => new sfWidgetFormInputText(),
      'costscovered' => new sfWidgetFormInputText(),
      'status'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 32)),
      'profession'   => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'bio'          => new sfValidatorString(),
      'company'      => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'twitter'      => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'email'        => new sfValidatorString(array('max_length' => 64)),
      'website'      => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'img'          => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'costscovered' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'status'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('speakers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Speakers';
  }

}

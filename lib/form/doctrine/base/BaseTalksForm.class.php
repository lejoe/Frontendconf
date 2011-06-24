<?php

/**
 * Talks form base class.
 *
 * @method Talks getObject() Returns the current form's model object
 *
 * @package    frontendconference
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTalksForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'fk_speakers'           => new sfWidgetFormInputText(),
      'title'                 => new sfWidgetFormTextarea(),
      'abstract'              => new sfWidgetFormTextarea(),
      'datepreferencefortalk' => new sfWidgetFormInputText(),
      'linktopresentation'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fk_speakers'           => new sfValidatorInteger(),
      'title'                 => new sfValidatorString(),
      'abstract'              => new sfValidatorString(array('required' => false)),
      'datepreferencefortalk' => new sfValidatorPass(array('required' => false)),
      'linktopresentation'    => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('talks[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Talks';
  }

}

<?php

/**
 * Talks filter form base class.
 *
 * @package    frontendconference
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTalksFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fk_speakers'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abstract'              => new sfWidgetFormFilterInput(),
      'datepreferencefortalk' => new sfWidgetFormFilterInput(),
      'linktopresentation'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fk_speakers'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'title'                 => new sfValidatorPass(array('required' => false)),
      'abstract'              => new sfValidatorPass(array('required' => false)),
      'datepreferencefortalk' => new sfValidatorPass(array('required' => false)),
      'linktopresentation'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('talks_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Talks';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'fk_speakers'           => 'Number',
      'title'                 => 'Text',
      'abstract'              => 'Text',
      'datepreferencefortalk' => 'Text',
      'linktopresentation'    => 'Number',
    );
  }
}

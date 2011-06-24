<?php

/**
 * propose actions.
 *
 * @package    frontendconference
 * @subpackage propose
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class proposeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }
    public function executeAdd(sfWebRequest $request)
  {
    // make sure it is a post
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    // email eintragen
    $speaker = new Speakers();
    $speaker->name = $this->getRequestParameter('name');
    $speaker->email = $this->getRequestParameter('email');
    $speaker->bio = $this->getRequestParameter('bio');
    $speaker->profession = $this->getRequestParameter('profession');
    $speaker->company = $this->getRequestParameter('company');
    $speaker->twitter = $this->getRequestParameter('twitter');
    $speaker->website = $this->getRequestParameter('website');
    $speaker->setCostscovered($this->getRequestParameter('costsCovered'));
    $speaker->save();
    $id = $speaker->getId();

    $talk = new Talks();
    $talk->fk_speakers = $id;
    $talk->title = $this->getRequestParameter('title');
    $talk->abstract = $this->getRequestParameter('abstract');
    $talk->datepreferencefortalk = $this->getRequestParameter('datePreferenceForTalk');
    $talk->save();


  }
}

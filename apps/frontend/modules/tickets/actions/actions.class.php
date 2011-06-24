<?php

/**
 * tickets actions.
 *
 * @package    frontendconference
 * @subpackage tickets
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ticketsActions extends sfActions
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
  public function executeRememberMe(sfWebRequest $request)
  {
    // make sure it is a post
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    // email eintragen
    $attendee = new Attendees();
    $attendee->email = $this->getRequestParameter('email');
    $attendee->entrytime = date('Y-m-d H:i:s');
    $attendee->save();
  }
}

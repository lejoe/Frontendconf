<?php

/**
 * home actions.
 *
 * @package    frontendconference
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $q = Doctrine_Query::create()
        ->select('s.*, t.*, p.*')
        ->from('Speakers s')
        ->leftJoin('s.Talks t')
        ->where('s.status = ?', 'confirmed');

    $this->speakers = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
  }
}

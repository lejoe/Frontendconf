<?php

/**
 * programme actions.
 *
 * @package    frontendconference
 * @subpackage programme
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class programmeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
            $q = Doctrine_Query::create()
        ->select('s.*, t.*')
        ->from('Speakers s')
        ->leftJoin('s.Talks t')
        ->where('s.status = ?', 'confirmed')
        ->orderBy('t.slot');

    $speakers = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    /*var_dump($this->speakers);
    die();*/

    $this->selectedNavi = "programme";

    $this->slots = Array();

    foreach ($speakers as $speaker) {
        $this->slots[] = $speaker;
    }


  }
}

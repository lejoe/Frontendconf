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
    $q = Doctrine_Query::create()
        ->select('n.*')
        ->from('News n')
        ->orderBy('n.date desc');

    $this->news = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    $this->agent = "desktop";
    $header = $request->getHttpHeader('User-Agent');
    if(preg_match("Android", $header) OR preg_match('#Mobile/.+Safari#i', $header)) {
        $this->agent = "mobile";
    };
  }
}
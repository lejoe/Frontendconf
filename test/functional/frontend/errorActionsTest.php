<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new sfTestFunctional(new sfBrowser());

$browser->
  get('/error/404')->

  with('request')->begin()->
    isParameter('module', 'error')->
    isParameter('action', '404')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('body', '!/Page not found/')->
  end()
;

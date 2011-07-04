<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->dispatcher->connect('template.filter_parameters', array(
        $this, 'templateFilterParameters'
      ));
  }

    public function templateFilterParameters(sfEvent $event, $parameters)
  {
    $parameters['agent'] = $this->getAgent();
    return $parameters;
  }

    public function getAgent() {
        $agent['type'] = "desktop";
        $header = $_SERVER['HTTP_USER_AGENT'];
        if(preg_match("Android", $header) OR preg_match('#Mobile/.+Safari#i', $header)) {
            $agent['type'] = "mobile";
        };
        $agent['header'] = $header;
        return $agent;
    }

}

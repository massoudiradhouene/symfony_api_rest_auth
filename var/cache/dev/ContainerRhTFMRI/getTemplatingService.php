<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\EngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\StreamingEngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\TwigEngine.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\EngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\TwigEngine.php';

return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['templating.name_parser'] ?? ($this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['templating.locator'] ?? $this->getTemplating_LocatorService()));

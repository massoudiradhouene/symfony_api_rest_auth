<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.App\Command\CreateClientCommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\src\\Command\\CreateClientCommand.php';

return $this->services['console.command.public_alias.App\\Command\\CreateClientCommand'] = new \App\Command\CreateClientCommand(($this->privates['fos_oauth_server.client_manager.default'] ?? $this->load('getFosOauthServer_ClientManager_DefaultService.php')));

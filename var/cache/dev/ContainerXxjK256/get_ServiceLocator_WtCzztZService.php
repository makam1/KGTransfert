<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.wtCzztZ' shared service.

return $this->privates['.service_locator.wtCzztZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.JBoVXlr', 'get_ServiceLocator_JBoVXlrService.php', true],
    'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.JBoVXlr', 'get_ServiceLocator_JBoVXlrService.php', true],
], [
    'App\\Controller\\SecurityController::register' => '?',
    'App\\Controller\\SecurityController:register' => '?',
]);

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_list' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

$this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal', 7 => 'cache.security_expression_language', 8 => 'api_platform.cache.route_name_resolver', 9 => 'api_platform.cache.identifiers_extractor', 10 => 'api_platform.cache.subresource_operation_factory', 11 => 'api_platform.cache.metadata.resource', 12 => 'api_platform.cache.metadata.property']);

$instance->setName('cache:pool:list');

return $instance;

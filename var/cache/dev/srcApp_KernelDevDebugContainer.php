<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDLYOxir\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDLYOxir/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDLYOxir.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDLYOxir\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDLYOxir\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DLYOxir',
    'container.build_id' => '441f9b5a',
    'container.build_time' => 1564480869,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDLYOxir');

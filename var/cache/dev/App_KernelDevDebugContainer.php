<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVhRmf5j\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVhRmf5j/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVhRmf5j.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVhRmf5j\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVhRmf5j\App_KernelDevDebugContainer([
    'container.build_hash' => 'VhRmf5j',
    'container.build_id' => 'eaf1d84f',
    'container.build_time' => 1713881826,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVhRmf5j');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRzsqhQQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRzsqhQQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRzsqhQQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRzsqhQQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRzsqhQQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'RzsqhQQ',
    'container.build_id' => '124a9896',
    'container.build_time' => 1712854101,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRzsqhQQ');

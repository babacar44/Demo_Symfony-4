<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBuUKiRx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBuUKiRx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBuUKiRx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBuUKiRx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBuUKiRx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BuUKiRx',
    'container.build_id' => '02743d24',
    'container.build_time' => 1564356730,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBuUKiRx');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWVVxCEQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWVVxCEQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWVVxCEQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWVVxCEQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWVVxCEQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WVVxCEQ',
    'container.build_id' => '8f8e83be',
    'container.build_time' => 1611703265,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWVVxCEQ');

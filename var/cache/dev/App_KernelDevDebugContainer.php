<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW1yj82j\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW1yj82j/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW1yj82j.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW1yj82j\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW1yj82j\App_KernelDevDebugContainer([
    'container.build_hash' => 'W1yj82j',
    'container.build_id' => '4cb0f473',
    'container.build_time' => 1718461217,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW1yj82j');

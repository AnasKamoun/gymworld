<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYKn4S9y\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYKn4S9y/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYKn4S9y.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYKn4S9y\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYKn4S9y\App_KernelDevDebugContainer([
    'container.build_hash' => 'YKn4S9y',
    'container.build_id' => '2083a22b',
    'container.build_time' => 1736114474,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYKn4S9y');

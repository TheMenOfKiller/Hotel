<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEZru9oa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEZru9oa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEZru9oa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEZru9oa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEZru9oa\App_KernelDevDebugContainer([
    'container.build_hash' => 'EZru9oa',
    'container.build_id' => '96e87162',
    'container.build_time' => 1606483306,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEZru9oa');